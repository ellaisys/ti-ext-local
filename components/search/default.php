<div id="local-box" class="local-box-fluid">
    <div class="panel panel-local local-search">
        <div class="panel-body">
            <h2 class="text-center"><?= lang('sampoyigi.local::default.text_order_summary'); ?></h2>
            <span class="search-label sr-only"><?= lang('sampoyigi.local::default.label_search_query'); ?></span>
            <?php if ($hideSearch) { ?>
                <a class="btn btn-block btn-primary"
                   href="<?= restaurant_url($menusPage); ?>"><?= lang('sampoyigi.local::default.text_find'); ?></a>
            <?php }
            else { ?>
                <form
                    id="location-search"
                    method="POST"
                    role="form"
                    data-request="<?= $searchEventHandler; ?>"
                >
                    <div class="input-group postcode-group">
                        <input
                            type="text"
                            id="search-query"
                            class="form-control text-center postcode-control"
                            name="search_query"
                            placeholder="<?= lang('sampoyigi.local::default.label_search_query'); ?>"
                            value="<?= $userPosition->formattedAddress; ?>"
                        >
                        <div class="input-group-btn">
                            <button
                                type="button"
                                class="btn btn-primary"
                                data-control="search-local"
                            ><?= lang('sampoyigi.local::default.text_find'); ?></button>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
