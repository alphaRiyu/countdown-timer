const day = document.getElementById('day');
const hour = document.getElementById('hour');
const minute = document.getElementById('minute');
const second = document.getElementById('second');
const date = document.getElementById('date').value;

function startCountdown() {
    const selectedDate = new Date(formatDate(date));
    const currentDate = new Date();
    const totalSec = (selectedDate - currentDate) / 1000;
    const days = Math.floor(totalSec / 3600 / 24);
    const hours = Math.floor(totalSec / 3600) % 24;
    const minutes = Math.floor(totalSec / 60) % 60;
    const seconds = Math.floor(totalSec) % 60;
    
    // display
    day.innerHTML = formatDigit(days);
    hour.innerHTML = formatDigit(hours);
    minute.innerHTML = formatDigit(minutes);
    second.innerHTML = formatDigit(seconds);
}

// this is to format a digit adding 0 in front if they are below 10 already
function formatDigit(time) {
    return time < 10 ? (`0${time}`) : time;
}

// this is to format the date in DD MMM YYYY brute force, still figuring out a better way
function formatDate(date) {
    return date.substr(8, 10) + ' ' + getMonth(date) + ' ' + date.substr(0, 4);
}

// this is to return the month in word format of a date
function getMonth(date) {
    let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return months[date.substr(5, 2) - 1];
}

// initial call
startCountdown();

// continuous call with 1 sec interval
setInterval(startCountdown, 1000);