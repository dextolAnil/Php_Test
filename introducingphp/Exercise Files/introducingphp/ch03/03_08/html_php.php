<?php $member = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serving different content</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <header class="both">
        <h1>Nonesuch Club</h1>
        <p>Welcome one and all to a really exclusive club for PHP developers. So exclusive, it doesn't exist!</p>
    </header>
<?php if (!$member) : ?>
    <section class="non-members">
        <h2>Become a Member</h2>
        <p>Useful information for non-members. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloribus esse itaque necessitatibus nobis placeat repellat temporibus voluptas. Architecto maxime quisquam soluta veniam? Aliquid consequuntur cum eligendi enim, natus non!</p>
        <p>Accusamus animi architecto asperiores aspernatur at dolor eaque error est illum ipsam libero nam nemo nisi, officiis pariatur quae quidem quod sed sunt totam velit veniam vero voluptas voluptatem voluptatibus?</p>
    </section>
<?php
endif;
if ($member) :
 ?>
    <section class="members">
        <h2>Members' News</h2>
        <p>For members's eyes only. Amet at, cum delectus deserunt dolorem doloribus ea esse eum eveniet facilis fuga illo in itaque iusto laudantium minus molestiae necessitatibus nobis, non obcaecati odit ratione repellendus rerum. Odit, placeat.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            <li>Commodi error numquam perferendis quis sit! Dicta, sit!</li>
            <li>Ab amet iste, molestias nobis officia quas ullam!</li>
            <li>Atque dolorum facere fuga fugiat labore quae sit?</li>
        </ul>
        <p>Aliquid cum ex expedita illum ipsa maxime, minus, natus nihil officia praesentium quas, quisquam ratione sapiente. Aliquid animi beatae fugit in magnam necessitatibus, nihil nobis quod repudiandae saepe. Similique, ullam?</p>
    </section>
    <?php endif?>

    <footer class="both">
        <p>&copy; 2015 Nonesuch Club</p>
    </footer>
</div>
</body>
</html>