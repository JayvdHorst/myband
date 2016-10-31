<section>
    {foreach from=$result item=oneItem}
        <h3>{$oneItem.title}</h3>
        <p>{$oneItem.content|truncate:30}</p>
        <img src="img/{$oneItem.image}">
        <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
    {/foreach}
</section>
<nav aria-label="Page navigation" class="paginationcss">
        <ul class="pagination">
                        {for $i=1 to $total_number_articles}
                                <li><a href="?action=home&page_nr={$i}">{$i}</a></li>
                        {/for}
        </ul>
</nav>