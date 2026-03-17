<?php 
    echo "
        <div id='form-wrap' class='form-container'>
            <h2>Prijava</h2>
            <form method='post' action='./obrada.php' onsubmit='return proveraPodataka(event)>
                <div class='input-group'>
                    <label>Email adresa:</label>
                    <input type='email' name='mail' class='input-field' placeholder='primer@mail.com' required />
                </div>
                <div class='input-group'>
                    <label>Lozinka:</label>
                    <input type='password' name='password' class='input-field' placeholder='Unesite lozinku' required />
                </div>
                <input type='submit' name='LogInSubmit' value='Prijavi se' class='btn btn-submit' />
                <a href='index.php?stranica=' class='back-link'>Nazad na početnu</a>
            </form>
        </div>
    ";
?>