let hiddens = document.querySelector('hiddens');
let students_id = document.getElementById('students_id');
let option = document.querySelector('select');
option.addEventListener('click', () => {
    students_id.value = option.value
})