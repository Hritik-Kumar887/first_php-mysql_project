<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <img src="agrajy.jfif" alt="Rajasthan">
    <header>
        <h1>MAHARAJA AGRASEN JI JAYANTI</h1>
        <p id="p1">
            We are happy to announce various cultural events and competitions 
            on this auspicious occassion. We are looking forward for your participation.
        </p>
        <br>
        <div class="div1">
            <h2>Fill up the form to participate</h2>
        </div>
    </header>
    <main>
        <form class="form" action="insert.php" method="POST">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="number" name="age" placeholder="Enter your age">
            <input type="text" name="gender" placeholder="Enter your gender">
            <input type="email" name="email" placeholder="Enter your email id">
            <input type="text" name="address" placeholder="Enter your address">
            <input type="number" name="mobile" placeholder="Enter your mobile number">
            <input type="text" name="father" placeholder="Enter your father's name">
            <input type="number" name="parentmobile" placeholder="Enter your parent's number">
            <div id="div2">
                <label>Choose competition to participate : </label>
                <select name="competition">
                    <option value="" selected disabled>Select competition in which you want to participate</option>
                    <option value="Essay">Essay</option>
                    <option value="Drawing">Drawing</option>
                    <option value="Singing">Singing</option>
                    <option value="Dancing">Dancing</option>
                    <option value="Fancy-dress">Fancy Dress</option>
                </select>
            </div>
            <textarea name="other" id="other" cols="70" rows="10" placeholder="Enter any other information here"></textarea>
            <button id="btn" type="submit" name="submit">Submit</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>
    <!-- INSERT INTO `participation` (`sno`, `name`, `age`, `gender`, `email`, `address`, `mobile`, `father`, `parentmobile`, `competition`, `other`, `dt`) VALUES ('1', 'testName', '23', 'male', 'this@this.com', 'far far away from city', '9999999999', 'thatName', '8888888888', 'Dancing', 'This is my first ever php myAdmin message', current_timestamp()); -->
</body>
</html>