<!--this is my first HTML assignment-->
<!DOCTYPE html>
<html>

<head>
    <title>self-instruction</title>
    <link href="B094020044_B094020044_洪甄妤.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="jquery-ui.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="JavaScripy.js" type="text/javascript"></script>
</head>

<body>
    <!-- 輸入帳密 -->
    <form action="" method="post">
        <div id="user">
            <?php
            if (isset($_POST['account'])) {
                if ($_POST['account'] == 'web' && $_POST['password'] == 'programming') {
                    print "<p id = 'success'>web logged in</p>";
                } else {
                    print "<p id = 'error'>Incorrect password</p>";
                    print "<p class='content'>Username: <input type='text' size='10' name='account'></p>";
                    print "<p class='content'>Password: <input type='password' size='10' name='password'></p>";
                    print "<p id='sub'><input type='submit' value='submit'></p>";
                }
            } else {
                print "<p class='content'>Username: <input type='text' size='10' name='account'></p>";
                print "<p class='content'>Password: <input type='password' size='10' name='password'></p>";
                print "<p id='sub'><input type='submit' value='submit'></p>";
            }
            ?>

        </div>
    </form>
    <!-- mode change -->
    <button id="mode">dark</button>
    <h1 style="color:violet;" class="center">Hello World</h1>
    <!--photo fo myself-->
    <p>
        <img src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.6435-9/123489187_3639876402721983_3293227009527320893_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Q5DXtmWsHJIAX-8CFeL&_nc_ht=scontent-tpe1-1.xx&oh=7a82873e4ce41749f19a779d35b1f7c2&oe=61D3D97C" width="250">
    </p>
    <p>Visitors:
        <?php
        $counter = file_get_contents("demo.txt");
        $counter += 1;
        file_put_contents("demo.txt", $counter);
        print($counter);
        ?>
    </p>

    <!--brief introduction-->
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">About</a></li>
            <li><a href="#tabs-2">Education</a></li>
        </ul>
        <div id="tabs-1">
            <p>
                My name is <em>Nina</em> and I'm from <strong>Kaohsiung</strong><br>
                Nice to meet <span style="color:tomato">you</span>
            </p>
            <!--using blockquote-->
            <h2>My favorite motto is</h2>
            <blockquote>
                <q>The only person you should try to be better than is the person you were yesterday.</q>
            </blockquote>

            Click<a href="https://www.facebook.com/profile.php?id=100000989763395"> here </a>to see my facebook
            <hr>
            <!--list of my intersts-->
            <h2>Here are my interests</h2>
            <ol>
                <li><span class="special">reading</span></li>
                <li>swimming</li>
                <li>cooking</li>
            </ol>
            <hr>
        </div>
        <div id="tabs-2">
            <h2>Education</h2>
            <table>
                <tr>
                    <th><strong>Year </strong></th>
                    <th><strong>School </strong></th>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Kaohsiung Girls' Senior High School</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>Kaohsiung Municipal Wu-Fu Junior High School</td>
                </tr>
            </table>
        </div>
    </div>



</body>


</html>