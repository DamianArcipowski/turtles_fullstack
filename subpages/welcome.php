<section class="turtle-facts">
    <h1>O żółwiu błotnym</h1>
    <p>
        Żółw błotny (Emys orbicularis) to jedyny naturalnie występujący gatunek żółwia w Polsce. 
        Zamieszkuje podmokłe tereny, torfowiska, jeziora i wolno płynące rzeki. 
        Mimo że potrafi prowadzić skryty tryb życia, jest wyjątkowo sprawnym pływakiem 
        i potrafi pokonywać duże odległości w poszukiwaniu odpowiednich miejsc do żerowania i składania jaj.
    </p>
    <h2>Czy wiedziałeś?</h2>
    <ul>
        <li>Żółwie istnieją od ponad 200 milionów lat.</li>
        <li>Niektóre gatunki mogą żyć ponad 100 lat.</li>
        <li>Żółwie kochają słońce.</li>
        <li>Zółwie morskie mogą podróżować tysiące kilometrów by wrócić do swojego miejsca narodzin.</li>
    </ul>
</section>
<section class="turtle-movie">
    <h3>Dowiedz się więcej!</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/gbn-Ky4RplU?si=yw3xqMzjD2KQBXQs" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</section>
<section class="turtle-reviews">
    <h4>Co mówią o nas odwiedzający?</h4>
        <p>„Nie miałam pojęcia, że żółwie występują w Polsce! Świetnie podane ciekawostki.” — Anna</p>
        <span>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </span>
    <p>„Piękne zdjęcia i naprawdę wartościowa treść. Polecam!” — Michał</p>
    <span>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </span>
    <p>„Bardzo ciekawa i przejrzysta strona. Brakuje mi tylko kilku informacji o diecie żółwia błotnego, ale całość świetnie się czyta.” — Karol</p>
    <span>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </span>
</section>
<section class="last-visit">
    <?php
    
    if (isset($_SESSION['visit_counter'])) {
        $_SESSION['visit_counter']++;
    } else {
        $_SESSION['visit_counter'] = 1;
    }

    echo '<h4>Liczba Twoich odwiedzin strony:</h4>';
    echo '<p>' . $_SESSION['visit_counter'] . '</p>';

    if (isset($_COOKIE['visit'])) {
        echo '<h4>Data Twoich ostatnich odwiedzin strony:</h4>';
        echo '<p>' . $_COOKIE['visit'] . '</p>';
    } else {
        echo '<h4>Witaj po raz pierwszy na naszej stronie!</h4>';
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim($ipList[0]);
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $json = file_get_contents("http://ip-api.com/json/$ip");
    $data = json_decode($json, true);

    $city = $data['city'] ?? 'N/A';
    $country = $data['country'] ?? 'N/A';

    $data = [
        'ip' => $ip,
        'city' => $city,
        'country' => $country
    ];

    $file = 'config/location.json';
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);

    echo '<h4>Twoje dane geolokalizacyjne:</h4>';
    echo '<p>' . $ip . ' | ' . $city . ' | ' . $country . '</p>';

    ?>
</section>