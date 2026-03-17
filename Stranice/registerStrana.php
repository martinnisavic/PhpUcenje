<?php
echo "
<div class='form-container'>
    <h2>Registracija Korisnika</h2>
    
    <form method='post' action='../obrada.php' onsubmit='return proveraPodataka(event)'>
        
        <div class='input-group'>
            <label>Korisničko ime:</label>
            <input type='text' name='username' class='input-field' placeholder='npr. petar123' required />
            <div id='err_username' class='error-msg'></div>
        </div>

        <div class='input-group'>
            <label>Email adresa:</label>
            <input type='email' name='email' class='input-field' placeholder='primer@mail.com' required />
            <div id='err_email' class='error-msg'></div>
        </div>

        <div class='input-group'>
            <label>Lozinka:</label>
            <input type='password' name='password' class='input-field' placeholder='Min. 6 karaktera' required />
            <div id='err_password' class='error-msg'></div>
        </div>

        <div class='input-group'>
            <label>Lozinka potvrda:</label>
            <input type='password' name='password_confirm' class='input-field' placeholder='Min. 6 karaktera' required />
            <div id='err_password_confirm' class='error-msg'></div>
        </div>

        <div class='input-group'>
            <label>Broj telefona:</label>
            <input type='text' name='telefon' class='input-field' required />
            <div id='err_telefon' class='error-msg'></div>
        </div>    
        
        <div class='input-group'>
            <label>Datum rodjenja:</label>
            <input type='date' name='datum_rodjenja' class='input-field' required />
            <div id='err_datum' class='error-msg'></div>
        </div> 

        <div class='input-group'>
            <span class='group-label'>Pol:</span>
            <div class='radio-group'>
                <input type='radio' name='pol' value='m' required> Muški
                <input type='radio' name='pol' value='z' required> Ženski
            </div>
            <div id='err_pol' class='error-msg'></div>
        </div>

        <div class='input-group'>
            <label>Grad:</label>
            <select name='grad' class='input-field' required>
                <option value=''>-- Izaberite grad --</option>
                <option value='Beograd'>Beograd</option>
                <option value='Novi Sad'>Novi Sad</option>
                <option value='Nis'>Niš</option>
            </select>
            <div id='err_grad' class='error-msg'></div>
        </div>

        <div class='checkbox-group'>
            <input type='checkbox' name='newsletter' value='1' id='news'>
            <label for='news'>Želim da primam newsletter</label>
            <div id='err_news' class='error-msg'></div>
        </div>

        <input type='submit' name='regSubmit' value='Otvori nalog' class='btn btn-submit' />
        
        <a href='index.php' class='back-link'>Vrati se na početnu</a>
        
    </form>
</div>
";