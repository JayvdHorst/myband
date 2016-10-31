<div class="row pull-right">
    <div class="col-sm-6 col-md-12" style="max-width: 300px;max-height: 300px">
        <div class="thumbnail">
            <section>
                {foreach from=$widgets item=oneItem}
                    <img src="img/{$oneItem.image}">
                {/foreach}
            </section>
            <div class="caption">
            </div>
        </div>
    </div>
</div>