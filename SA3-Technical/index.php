<?php
$fields = [
    "first_name" => "First Name",
    "middle_name" => "Middle Name",
    "last_name" => "Last Name",
    "username" => "Username",
    "password" => "Password",
    "confirm_password" => "Confirm Password",
    "birthday" => "Birthday",
    "email" => "Email",
    "contact_number" => "Contact Number",
];

$formData = [];
foreach ($fields as $name => $label) {
    $formData[$name] = $_POST[$name] ?? "";
}

$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$passwordsMatch = $formData["password"] === $formData["confirm_password"];

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
    <title>Registration Module</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --panel: #ffffff;
            --ink: #172033;
            --muted: #667085;
            --line: #d9e1ec;
            --accent: #2563eb;
            --accent-dark: #1d4ed8;
            --danger-bg: #fff1f2;
            --danger: #be123c;
            --success-bg: #f0fdf4;
            --success-line: #bbf7d0;
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
            width: min(940px, calc(100% - 32px));
            margin: 48px auto;
        }

        .hero {
            margin-bottom: 22px;
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
            font-size: clamp(30px, 5vw, 48px);
            line-height: 1;
        }

        .subtitle {
            max-width: 620px;
            margin: 12px 0 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.6;
        }

        .registration-form,
        .result {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(217, 225, 236, 0.9);
            border-radius: 18px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(14px);
        }

        .registration-form {
            padding: 30px;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            align-items: flex-start;
            margin-bottom: 22px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--line);
        }

        .form-header h2,
        .result h2 {
            margin: 0;
            font-size: 21px;
        }

        .badge {
            flex: 0 0 auto;
            border-radius: 999px;
            background: #eff6ff;
            color: var(--accent);
            padding: 7px 12px;
            font-size: 12px;
            font-weight: 700;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin: 0 0 7px;
            color: #344054;
            font-size: 13px;
            font-weight: 700;
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

        button {
            width: 100%;
            height: 48px;
            margin-top: 24px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 14px 28px rgba(37, 99, 235, 0.22);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 34px rgba(37, 99, 235, 0.28);
        }

        .result {
            margin-top: 18px;
            padding: 24px;
            background: var(--success-bg);
            border-color: var(--success-line);
        }

        .result-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 16px;
        }

        .result p {
            margin: 0;
            padding: 12px;
            border: 1px solid #dcfce7;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.76);
            font-size: 14px;
        }

        .result strong {
            display: block;
            margin-bottom: 5px;
            color: var(--muted);
            font-size: 12px;
            text-transform: uppercase;
        }

        .error {
            margin: 16px 0 0;
            padding: 14px 16px;
            background: var(--danger-bg);
            border: 1px solid #fecdd3;
            border-radius: 14px;
            color: var(--danger);
            font-size: 14px;
            font-weight: 700;
        }

        .copyright {
            margin: 14px 0 0;
            color: var(--muted);
            font-size: 14px;
            text-align: center;
        }

        @media (max-width: 700px) {
            .page {
                margin: 28px auto;
            }

            .registration-form {
                padding: 22px;
            }

            .form-header {
                display: block;
            }

            .badge {
                display: inline-block;
                margin-top: 12px;
            }

            .form-grid,
            .result-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="hero">
            <p class="eyebrow">Activity A</p>
            <h1>Registration Module</h1>
            <p class="subtitle">Enter your personal information and submit the form. The details will appear below only when the password and confirm password fields match.</p>
        </section>

        <form class="registration-form" method="post" action="">
            <div class="form-header">
                <h2>My Personal Information</h2>
                <span class="badge">POST Method</span>
            </div>

            <div class="form-grid">
                <?php foreach ($fields as $name => $label) { ?>
                    <div class="field<?php echo $name === "email" || $name === "contact_number" ? " full" : ""; ?>">
                        <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
                        <input
                            type="text"
                            id="<?php echo e($name); ?>"
                            name="<?php echo e($name); ?>"
                            value="<?php echo e($formData[$name]); ?>"
                            required
                        >
                    </div>
                <?php } ?>
            </div>

            <button type="submit">Submit Registration</button>
        </form>

        <p class="copyright">&copy; Crix Brix</p>

        <?php if ($isSubmitted && !$passwordsMatch) { ?>
            <p class="error">password and confirm password are not the same</p>
        <?php } ?>

        <?php if ($isSubmitted && $passwordsMatch) { ?>
            <section class="result">
                <h2>Submitted Information</h2>
                <div class="result-grid">
                    <?php foreach ($fields as $name => $label) { ?>
                        <p><strong><?php echo e($label); ?></strong> <?php echo e($formData[$name]); ?></p>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </main>
</body>
</html>
