 <hr><h1 style="text-align: center; letter-spacing: 5px; font-family: BarkerFont; color: rgb(26, 159, 164);">Most Recent Video's</h1>
 <div class="row">
    {foreach from=$result item=oneItem}
        <div class="col-xs-4" style="text-align: center; height: 250px;">
        <img src="img/image_recents/{$oneItem.image}">
            <div class="caption">
                <p style="color: grey; font-family: BarkerFont; font-size: 14px;">{$oneItem.title}</p>
                <p style="color: lightgray; font-family: BarkerFont; font-size: 12px;">{$oneItem.content}</p>
                <p>{$oneItem.date_created|date_format:"%e %B %Y"}</p>
            </div>
        </div>
    {/foreach}
 </div>
<div aria-label="Page navigation" class="paginationcss">
        <ul class="pagination">
                        {for $i=1 to $total_number_articles}
                                <li><a href="?action=home&page_nr={$i}">{$i}</a></li>
                        {/for}
        </ul>
</div>
 <hr>