<hr>
{foreach from=$aboutp item=oneItem}
    <div class="" style="text-align: center;">
        <img src="img/{$oneItem.images}">
        <div class="">
            <p style="color: darkgrey; font-family: BarkerFont; font-size: 16px;">{$oneItem.title}</p>
            <p style="color: gray; font-family: BarkerFont; font-size: 12px;">{$oneItem.content}</p>
        </div>
    </div>
{/foreach}
<hr>