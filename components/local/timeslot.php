<div
    class="dropdown"
>
    <button
        class="btn btn-light btn-timepicker btn-block dropdown-toggle text-truncate"
        type="button"
        id="orderTimePicker"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        <b><?=
            ($orderTimeSlotType == 'asap')
                ? lang('sampoyigi.local::default.text_asap')
                : $orderDateTime->format($orderDateTimeFormat);
            ?></b>
    </button>

    <div class="dropdown-menu" aria-labelledby="orderTimePicker">
        <button
            type="button"
            class="dropdown-item py-2"
            data-timepicker-option="asap"
        ><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?= lang('sampoyigi.local::default.text_asap'); ?></button>
        <button
            type="button"
            class="dropdown-item py-2"
            data-timepicker-option="later"
        ><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= lang('sampoyigi.local::default.text_later'); ?></button>

        <form
            class="dropdown-content px-4 py-3 hide"
            role="form"
            data-request="<?= $timeSlotEventHandler; ?>"
        >
            <input type="hidden" data-timepicker-control="type" value="<?= $orderTimeSlotType ?>">
            <div class="form-group">
                <select
                    class="form-control"
                    data-timepicker-control="date"
                    data-timepicker-label="<?= lang('sampoyigi.local::default.label_date'); ?>"
                    data-timepicker-selected="<?= $orderDateTime ? $orderDateTime->format('Y-m-d') : '' ?>"
                ></select>
            </div>
            <div class="form-group">
                <select
                    class="form-control"
                    data-timepicker-control="time"
                    data-timepicker-label="<?= lang('sampoyigi.local::default.label_time'); ?>"
                    data-timepicker-selected="<?= $orderDateTime ? $orderDateTime->format('H:i') : '' ?>"
                ></select>
            </div>
            <button type="button" class="btn btn-primary" data-timepicker-submit>
                <?= sprintf(lang('sampoyigi.local::default.label_choose_order_time'), $orderType == 'delivery'
                    ? lang('sampoyigi.local::default.text_delivery')
                    : lang('sampoyigi.local::default.text_collection'));
                ?>
            </button>
        </form>
    </div>
</div>
