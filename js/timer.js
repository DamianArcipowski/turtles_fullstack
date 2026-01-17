const paragraph = document.querySelector('.timer');

function countTimeToSpring() {
    const springDay = 21;
    const springMonth = 3;

    const today = new Date();
    const now = Date.now();

    let targetDate = new Date(today.getFullYear(), springMonth - 1, springDay, 0, 0, 0);
    if (targetDate < today) {
        targetDate = new Date(today.getFullYear() + 1, springMonth - 1, springDay, 0, 0, 0);
    }

    let msDifference = targetDate - now;

    const leftDays = Math.floor(msDifference / (1000 * 60 * 60 * 24));
    msDifference -= leftDays * (1000 * 60 * 60 * 24);

    const leftHours = Math.floor(msDifference / (1000 * 60 * 60));
    msDifference -= leftHours * (1000 * 60 * 60);

    const leftMinutes = Math.floor(msDifference / (1000 * 60));
    msDifference -= leftMinutes * (1000 * 60);

    const leftSeconds = Math.floor(msDifference / 1000);
    
    paragraph.textContent = `${leftDays} dni, ${leftHours} godzin, ${leftMinutes} minut, ${leftSeconds} sekund`;
}

setInterval(() => countTimeToSpring(), 1000);