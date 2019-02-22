var baseurl = $('#_base_url').val()
const vldt_login = () => {
    ;
    if(username.val() === '' || password.val() === '') {
        alert('Field is required.')
        return false
    }
    $('#login_form').submit()
}

const verify_login = () => {
    const [username, password] = [$('#login_username').val(), $('#login_password').val()]
    if(username === '' || password === '') {
        alert('Field is required.')
        return false
    }
    $.ajax({
        url : `${baseurl}auth/verify_login/`,
        type : 'post',
        data: {username, password},
        success: (res) => {
            if(res === 'true'){
                window.location.href = `${baseurl}admin`;
            } else {
                $('.logincard .alert').show();
            }
        }
    })
}