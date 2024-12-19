function validateForm() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const qualification = document.getElementById('qualification');
    const experience = document.getElementById('experience');
    const skills = document.getElementById('skills');

    if (name.value === '' || email.value === '' || phone.value === '' || qualification.value === '' || experience.value === '' || skills.value === '') {
        alert('Please fill in all fields');
        return false;
    }
    return true;
}
