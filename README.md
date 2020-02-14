CodeIgniter Emojis
==================

⚠️ This project is no longer maintained and soon be deleted.
Now i'm using integrated emojis with utf8mb4 database encodings.

> This project is working well, but need some help to add some shortcuts.

My own contribution to implement the universal unicode emojis in CodeIgniter !
It is almost very simple, but the big part is to find the classic shortcuts and associate it to the right emoji...
That's the reason why i put it on github, hoping some helps...

The good thing with icon emojis, is that we have a universal icons, vectorials, matching pretty well with all recent systems !

The ```emojis.php``` file is not necessary in order to use the ```emoticons_helper.php``` file, it just contains ALL the emoticons, a sort of basket 🙂

Installation
------------

You just have to put the file ```emoticons_helper.php``` into the helper folder of your application project.
Load this helper as you wanted to, on your own controller, or in the ```autoload.php``` file.

After that, you'll just have to parse your text in your code like this : 

```
<?php echo parse_emoticons("Your text with great ;-) :-p :-D smileys !"); ?>
```

Thanks for your visit !

**Nicolas PERE**
