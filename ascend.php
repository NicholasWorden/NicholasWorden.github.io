<?php
//Check that form data exists
if (!isset($_POST['ascendChoice'])) {
    echo "<h2>Error: No ascension choice was submitted.</h2>";
    exit();
}

//Store user input safely
$choice = htmlspecialchars($_POST['ascendChoice']);
$pageTitle = "Ascension Result";

echo "<h1>Your Choice Was Submitted</h1>";
echo "<p>You selected: <strong>$choice</strong></p>";

//determines the resulting end text depending on the user choice
if ($choice == "yes"){
    echo "<p>You've ascended under the guidance of the coconut, and gained great strength. But that strength is not yours.</p>";
}else{
    echo "<p>You've ascended without the guidance of the coconut, and gained modest strength. But that strength is yours.</p>";
}

/*try {


     Fake connection info (DB does NOT need to exist)
    $pdo = new PDO(
        "mysql:host=localhost;dbname=coconutDB",
        "root",
        ""
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>Database connection successful (simulated).</p>";

    //Retrieve the text of this choice
    $sql1 = "SELECT choice_text FROM ascension_choices WHERE choice_text = :choice";
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute(['choice' => $choice]);

    echo "<p>Executed SELECT query for user choice.</p>";

    //Retrieve all users
    $sql2 = "SELECT user_id, name, email FROM users";
    //$stmt2 = $pdo->query($sql2);


    //Example JOIN Query
    $sql3 = "
        SELECT u.name, a.choice_text, d.timestamp
        FROM user_decisions d
        JOIN users u ON u.user_id = d.user_id
        JOIN ascension_choices a ON a.choice_id = d.choice_id
        ORDER BY d.timestamp DESC
    ";


} catch (PDOException $e) {
    echo "<h3>Database Error Occurred</h3>";
    echo "<p>" . $e->getMessage() . "</p>";

    echo "<p>Using placeholder data instead.</p>";
}*/

echo "<p>Thank you for participating in the Coconut Ascension Ritual.</p>";

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="ascend.css">
    </head>
</html>