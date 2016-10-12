{*<?php*}
    {*echo '<section>';*}

    {*//fetch_assoc should not be in the view!*}
    {*foreach($result as $row=>$oneItem)*}
    {*{*}

    {*echo '<article>';*}
        {*echo '<h1>'.$oneItem['title'].'</h1>';*}
        {*echo '<content>'.$oneItem['content'].'</content>';*}
        {*echo '<img src=img/'.$oneItem['image'].'>';*}
        {*echo '</article>';*}
    {*}*}

    {*echo '</section>';*}

<section>
    {foreach from=$result item=oneItem}
        <h1>{$oneItem.title}</h1>
        <p>{$oneItem.content|truncate:30}</p>
        <img src="img/{$oneItem.image}">
        <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
    {/foreach}
</section>