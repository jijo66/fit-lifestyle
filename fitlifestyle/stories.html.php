<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>List of Motivational stories</title>
<link href="style1.css"style="text/css" rel="stylesheet" />
</head>
<body>
<figure><img src="just begin2.jpg" alt="Just Begin"/>
<figcaption>It's never too late to begin<span class="photocredit">[photographer: George Gitau]</figcaption>
</figure>
<p><a href="?addstory">Add your own Story here</a></p>
<p style="color:green">Here are some of the motivational stories from people 
all over the world trying to fight obesity in the database. Read their stories and be encouraged and motivated 
to crush your own fitness goals. Have a story to tell? click on the link above to add your own site and encourage others. Join the Fit Lifestyle movement.</p>
<?php foreach ($stories as $story): ?>
<blockquote>
<p><?php echo htmlspecialchars($story['text'], ENT_QUOTES, 'UTF-8');
?>
</p>
</blockquote>
<?php endforeach; ?>
</body>
</html>