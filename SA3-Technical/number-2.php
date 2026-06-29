<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$rememberMe = isset($_POST["remember_me"]);
$username = $_COOKIE["login_username"] ?? "";
$password = $_COOKIE["login_password"] ?? "";
$notice = "";

if ($isSubmitted) {
    $submittedUsername = $_POST["username"] ?? "";
    $submittedPassword = $_POST["password"] ?? "";

    if ($rememberMe) {
        setcookie("login_username", $submittedUsername, time() + (86400 * 30), "/");
        setcookie("login_password", $submittedPassword, time() + (86400 * 30), "/");

        $username = $submittedUsername;
        $password = $submittedPassword;
        $notice = "Username and password were saved using cookies.";
    } else {
        setcookie("login_username", "", time() - 3600, "/");
        setcookie("login_password", "", time() - 3600, "/");

        $username = "";
        $password = "";
        $notice = "Remember Me was not checked, so no login data was saved.";
    }
}

$rememberChecked = $rememberMe || (!$isSubmitted && ($username !== "" || $password !== ""));

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity A - Number 2</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --ink: #172033;
            --muted: #667085;
            --line: #d9e1ec;
            --accent: #2563eb;
            --accent-dark: #1d4ed8;
            --green: #16a34a;
            --shadow: 0 24px 70px rgba(15, 23, 42, 0.14);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(37, 99, 235, 0.18), transparent 34%),
                linear-gradient(135deg, #f8fbff 0%, var(--bg) 48%, #e8eef8 100%);
            color: var(--ink);
        }

        .page {
            width: min(760px, calc(100% - 32px));
            margin: 48px auto;
        }

        .top-link {
            display: inline-flex;
            margin-bottom: 24px;
            border-radius: 999px;
            background: #eff6ff;
            color: var(--accent);
            padding: 9px 14px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
        }

        .hero {
            margin-bottom: 28px;
        }

        .eyebrow {
            margin: 0 0 8px;
            color: var(--accent);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1;
        }

        .subtitle {
            max-width: 620px;
            margin: 12px 0 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.6;
        }

        .login-wrap {
            display: flex;
            justify-content: center;
        }

        .login-card {
            width: min(440px, 100%);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(217, 225, 236, 0.9);
            border-radius: 18px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(14px);
        }

        .login-topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 72px;
            padding: 18px 22px;
            border-bottom: 1px solid var(--line);
            background: #ffffff;
        }

        .login-logo {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #111827;
            color: #ffffff;
            font-size: 20px;
            font-weight: 900;
        }

        .menu-button {
            width: 46px;
            height: 46px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: #ffffff;
            color: var(--muted);
            font-size: 26px;
            line-height: 1;
            cursor: default;
        }

        .login-body {
            padding: 28px 24px 20px;
        }

        .login-field + .login-field {
            margin-top: 20px;
        }

        label {
            display: block;
            margin: 0 0 7px;
            color: #344054;
            font-size: 15px;
            font-weight: 800;
        }

        input {
            width: 100%;
            height: 46px;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 10px 13px;
            color: var(--ink);
            font-size: 15px;
            background: #fbfdff;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        input:focus {
            border-color: var(--accent);
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }

        .login-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 20px;
        }

        .remember-row {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 0;
            color: var(--ink);
            font-size: 15px;
            font-weight: 600;
        }

        .remember-row input {
            width: 17px;
            height: 17px;
            padding: 0;
            accent-color: var(--accent);
        }

        button {
            width: auto;
            min-width: 112px;
            height: 48px;
            margin: 0;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 0 24px;
            background: linear-gradient(135deg, #f8fafc, #e5e7eb);
            color: var(--ink);
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(15, 23, 42, 0.12);
        }

        .login-credit {
            margin: 20px 0 0;
            color: var(--green);
            font-size: 16px;
            font-weight: 800;
            text-align: center;
        }

        .notice {
            width: min(440px, 100%);
            margin: 16px auto 0;
            padding: 14px 16px;
            border: 1px solid #bfdbfe;
            border-radius: 14px;
            background: #eff6ff;
            color: #1e40af;
            font-size: 14px;
            font-weight: 700;
        }

        @media (max-width: 700px) {
            .page {
                margin: 28px auto;
            }

            .login-actions {
                align-items: stretch;
                flex-direction: column;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <a class="top-link" href="index.php">Back to Number 1</a>

        <section class="hero">
            <p class="eyebrow">Activity A - Number 2</p>
            <h1>Login Module</h1>
            <p class="subtitle">The username and password are stored in cookies only when the Remember Me checkbox is checked.</p>
        </section>

        <div class="login-wrap">
            <form class="login-card" method="post" action="">
                <div class="login-topbar">
                    <div class="login-logo">G</div>
                    <button class="menu-button" type="button" aria-label="Menu">&#9776;</button>
                </div>

                <div class="login-body">
                    <div class="login-field">
                        <label for="username">Username</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            value="<?php echo e($username); ?>"
                            required
                        >
                    </div>

                    <div class="login-field">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            value="<?php echo e($password); ?>"
                            required
                        >
                    </div>

                    <div class="login-actions">
                        <label class="remember-row" for="remember_me">
                            Remember Me
                            <input
                                type="checkbox"
                                id="remember_me"
                                name="remember_me"
                                <?php echo $rememberChecked ? "checked" : ""; ?>
                            >
                        </label>

                        <button type="submit">Submit</button>
                    </div>

                    <p class="login-credit">&copy; JOVS FRANCIS P. CABURAO</p>
                </div>
            </form>
        </div>

        <?php if ($notice !== "") { ?>
            <p class="notice"><?php echo e($notice); ?></p>
        <?php } ?>
    </main>
</body>
</html>
