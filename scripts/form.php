<script>
    function setData() {
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        var nameRegex = /^[a-zA-Z\u00C0-\u00FF]+$/;
        var usernameRegex = /^[a-zA-Z0-9]+$/;
        var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,256}$/;

        var isValid = true;

        if (!nameRegex.test(name) || name.length > 128) {
            alert("Invalid name. It must contain only letters and be less than 128 characters.");
            isValid = false;
        }

        if (!nameRegex.test(surname) || surname.length > 128) {
            alert("Invalid surname. It must contain only letters and be less than 128 characters.");
            isValid = false;
        }

        if (!usernameRegex.test(username) || username.length > 128) {
            alert("Invalid username. It can contain letters and numbers, no whitespaces, and be less than 128 characters.");
            isValid = false;
        }

        if (!passwordRegex.test(password) || password.length > 256) {
            alert("Invalid password. It must be between 8 and 256 characters, contain at least one uppercase letter, one number, and one special symbol.");
            isValid = false;
        }

        document.getElementById("sexinput").value = document.getElementById("sexSelect").value;
        document.getElementById("interestinput").value = document.getElementById("interestSelect").value;
        
        if (isValid) {
            // Form is valid, you can submit it or perform other actions
            alert("Form is valid. Submitting...");
            document.getElementById("myForm").submit();
        }
    }
</script>
<div class="form__field">
    <label class = "asidelabel" for = "nameinput"><svg class="icon"><use xlink:href="#icon-half"></use></svg><span class="hidden">Name</span></label>
    <input id = "nameinput" type = "text" name = "name" placeholder = "Name" required/>
</div>
<div class="form__field">
    <label class = "asidelabel" for = "surnameinput"><svg class="icon rotate180"><use xlink:href="#icon-half"></use></svg><span class="hidden">Surname</span></label>
    <input id = "surnameinput" type = "text" name = "surname" placeholder = "Surname" required/>
</div>
<div class="form__field">
    <label class = "asidelabel" for = "userinput"><svg class="icon"><use xlink:href="#icon-user"></use></svg><span class="hidden">Username</span></label>
    <input id = "userinput" type = "text" name = "username" placeholder = "Username" required/>
</div>
<div class="form__field">
    <label class = "asidelabel" for = "passwordinput"><svg class="icon"><use xlink:href="#icon-lock"></use></svg><span class="hidden">Password</span></label>
    <input id = "passwordinput" type = "password" name = "password" placeholder = "Password" placeholder = "Password"required/>
</div>
<div class="form__field">
    <label class = "asidelabel" for = "emailinput"><svg class="icon"><use xlink:href="#icon-letter"></use></svg><span class="hidden">Email</span></label>
    <input id = "emailinput" type = "email" name = "email" placeholder = "Email" required/>
</div>
<div class="form__field">
    <label class = "asidelabel" for = "dateinput"><svg class="icon"><use xlink:href="#icon-cake"></use></svg><span class="hidden">Birthdate</span></label>
    <input id = "dateinput" type = "date" name = "birthday" required/>
</div>
<div class="mb-3">
    <label for="sexSelect" class="form-label">Choose your sex</label>
    <select id="sexSelect" class="form-select" required>
        <option>Female</option>
        <option>Male</option>
        <option>Normal</option>
    </select>
    <input id = "sexinput" type = "hidden" name = "sex" value = ""/>
</div>
<div class="mb-3">
    <label for="interestSelect" class="form-label">Choose your interests</label>
    <select id="interestSelect" class="form-select" required>
        <option>Community Member</option>
        <option>Beta Testing</option>
        <option>Development</option>
        <option>Collaborator</option>
    </select>
    <input id = "interestinput" type = "hidden" name = "interest" value = ""/>
</div>
<button class = "buttonCh" type="button" onclick = "setData()"/>Submit</button>