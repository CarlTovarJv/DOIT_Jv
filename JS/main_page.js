const video = document.getElementById('video_rain');

    video.addEventListener('timeupdate', function() {
        if (video.currentTime > (video.duration - 0.1)) {
            video.currentTime = 0;
            video.play();
        }});










//Popout of options 

const hamburgerMenu = document.getElementById('hamburgerMenu');
const popoutMenu = document.getElementById('popoutMenu');
const closeButton = document.querySelector('.fa-xmark'); // Close icon
const pomodoroButton = document.getElementById('pomodoro_main'); // Pomodoro button

// Show or hide the popout when you click the hamburger icon
hamburgerMenu.addEventListener('click', function() {
    if (popoutMenu.classList.contains('show')) {
        popoutMenu.classList.remove('show');
        setTimeout(() => {
            popoutMenu.style.display = 'none';
        }, 300); 
    } else {
        popoutMenu.style.display = 'block';
        setTimeout(() => {
            popoutMenu.classList.add('show');
        }, 10); 
    }
});

// Close the popout when clicking the X button
closeButton.addEventListener('click', function() {
    popoutMenu.classList.remove('show');
    setTimeout(() => {
        popoutMenu.style.display = 'none';
    }, 300);
});
















//Pomodoro 

// Initialize timer variables
let isRunning = false;
let isPaused = false;
let timer;
let timeLeft = 25 * 60;


const timerDisplay = document.getElementById('timer');
const startBtn = document.getElementById('startBtn');
const pauseBtn = document.getElementById('pauseBtn');
const resetBtn = document.getElementById('resetBtn');


function formatTime(seconds) {
    const mins = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${mins < 10 ? '0' : ''}${mins}:${secs < 10 ? '0' : ''}${secs}`;
}


function updateTimer() {
    timerDisplay.textContent = formatTime(timeLeft);
}


function startTimer() {
    timer = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            updateTimer();
        } else {
            clearInterval(timer);
            isRunning = false;
            startBtn.textContent = 'Start';
            pauseBtn.style.display = 'none';
            alert('Time\'s up!');
        }
    }, 1000);
}


startBtn.addEventListener('click', () => {
    if (!isRunning) {
        if (isPaused) {
            isPaused = false;
            startTimer();
        } else {
            timeLeft = 25 * 60;
            updateTimer();
            startTimer();
        }
        isRunning = true;
        startBtn.style.display = 'none';
        pauseBtn.style.display = 'inline-block';
    }
});


pauseBtn.addEventListener('click', () => {
    if (isRunning) {
        clearInterval(timer);
        isPaused = true;
        isRunning = false;
        startBtn.textContent = 'Resume';
        startBtn.style.display = 'inline-block';
        pauseBtn.style.display = 'none';
    }
});


resetBtn.addEventListener('click', () => {
    clearInterval(timer);
    isRunning = false;
    isPaused = false;
    timeLeft = 25 * 60;
    updateTimer();
    startBtn.textContent = 'Start';
    startBtn.style.display = 'inline-block';
    pauseBtn.style.display = 'none';
});


updateTimer();


const pomodoro_main = document.getElementById('pomodoro_main');
const pomodoro_container = document.getElementById('pomodoro-container_cs');


pomodoro_main.addEventListener('click', function() {
    if (pomodoro_container.classList.contains('show')) {
        pomodoro_container.classList.remove('show');
        setTimeout(() => {
            pomodoro_container.style.display = 'none';
        }, 300); 
    } else {
        pomodoro_container.style.display = 'block';
        setTimeout(() => {
            pomodoro_container.classList.add('show');
        }, 10); 
    }
});

// Close the Pomodoro container when the "X" button is clicked
document.getElementById('mark_pomodoro').addEventListener('click', function() {
    pomodoro_container.classList.remove('show');
    setTimeout(() => {
        pomodoro_container.style.display = 'none';
    }, 300);
});








    