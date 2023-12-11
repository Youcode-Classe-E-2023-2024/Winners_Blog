<?php include("../includes/db.inc.php");
if (isset($_SESSION["login"])) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="../pictures/avito.png" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Avito</title>
</head>

<body class="bg-gray-300 " style="background-color: #d5deef;">


    <!------------------------------------------start navbar---------------------------------------------- -->


    <div id="navbar-container"><?php include("../js/navbar.php"); ?></div>
    <script src="../js/script.js"></script>


    <!------------------------------------------end navbar---------------------------------------------- -->


    <!------------------------------------------strat container---------------------------------------------- -->
    <?php
    // this is for the password recover form
    if (isset($_GET["selector"], $_GET["validator"])) {
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];
    } if (empty($selector) || empty($validator)) {
        echo "Could not validate your request";
    } else {
        if (ctype_xdigit($selector) && ctype_xdigit($selector)) {
    ?>

            <div class="flex mb-32  items-center justify-center">
                <img src="../pictures/new-pass-pic.png" class="hidden lg:block  rounded-2xl" alt="">
                <div class="chaoui w-[400px] bg-white mx-auto my-10 border-2 border-black rounded-2xl p-8 rounded-xl shadow shadow-slate-300" class="relative max-w-lg bg-white mx-auto my-10 border-2 border-black rounded-2xl p-8 rounded-xl shadow shadow-slate-300">
                    <h1 class="text-4xl font-medium">Change password</h1>
                    <p class="text-slate-500">Fill up the form to change your password</p>

                    <form action="../includes/password_recover/reset_password.inc.php" method="post" class="my-10">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <div class="flex flex-col space-y-5">
                            <label for="password">
                                <p class="font-medium text-slate-700 pb-2">New password</p>
                                <input id="password" name="password" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="**********">
                            </label>
                            <label for="password">
                                <p class="font-medium text-slate-700 pb-2">Confirm password</p>
                                <input id="password" name="password-repeat" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="**********">
                            </label>
                            <p class="mt-4 italic text-gray-500 font-light text-xs">Password strength: <span class="font-bold text-green-400">strong</span></p>
                            <div class="mt-4 flex items-center text-gray-500"> <input type="checkbox" id="remember" name="remember" class="mr-2" />
                                <label class="text-sm" for="remember">I agree with the <a class="text-indigo-400 hover:text-indigo-500">Privacy
                                        Policy</a></p>
                            </div>

                            <button name="reset-password-submit" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>


                                <span>Reset password</span>
                            </button>
                            <p class="text-center">Not registered yet? <a href="./Register.php" class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Register now
                                    </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg></span></a></p>
                        </div>
                    </form>
            <?php
        } else {
            header("Location: ../index.php");
        }
    }
            ?>
                </div>
            </div>





            <!------------------------------------------end contaner---------------------------------------------- -->

            <!----------------------------- strat footer ------------------------------------->

            <div id="Footer-container"></div>
            <script src="../js/footer.js"></script>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

            <script>
                jQuery('#waterdrop').raindrops({
                    color: '#ffffff',
                    canvasHeight: 150,
                    density: 0.1,
                    frequency: 20
                });
            </script>

            <!----------------------------- end footer ------------------------------------->


</body>

</html>