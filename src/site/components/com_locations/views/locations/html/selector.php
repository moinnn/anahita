<?php defined('KOOWA') or die; ?>

<h3 class="modal-header">
    <?= @text('Add Location') ?>
</h3>

<div class="modal-body">

    <div data-behavior="LocationSelector">
        <div id="location-form-container">
            <form action="<?= @route($locatable->getURL()) ?>" method="post">
                <input type="hidden" name="action" value="addlocation" />

                <div class="control-group">
                    <label class="label-group"  for="entity-name">
                    <?= @text('LIB-AN-ENTITY-NAME') ?>
                    </label>
                    <div class="controls">
                    <input required class="input-block-level" id="entity-name" size="30" maxlength="100" name="name" type="text" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="label-group"  for="location-address">
                    <?= @text('COM-LOCATIONS-LOCATION-ADDRESS') ?>
                    </label>
                    <div class="controls">
                    <input class="input-block-level" id="location-address" size="30" maxlength="100" name="address" type="text" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="label-group"  for="location-city">
                    <?= @text('COM-LOCATIONS-LOCATION-CITY') ?>
                    </label>
                    <div class="controls">
                    <input required class="input-block-level" id="location-city" size="30" maxlength="100" name="city" type="text" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="label-group"  for="location-province">
                    <?= @text('COM-LOCATIONS-LOCATION-COUNTRY') ?>
                    </label>
                    <div class="controls">
                    <?= @helper('selector.country', array('name' => 'country', 'id' => 'select-country')) ?>
                    </div>
                </div>

                <div class="control-group">
                    <label class="label-group"  for="location-state-province">
                    <?= @text('COM-LOCATIONS-LOCATION-STATE-PROVINCE') ?>
                    </label>
                    <div class="controls">
                    <input required class="input-block-level" id="location-state-province" size="30" maxlength="100" name="state_province" type="text" />
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button class="btn" data-dismiss="modal">
                            <?= @text('LIB-AN-ACTION-CANCEL') ?>
                        </button>

                        <button class="btn btn-primary" type="submit">
                            <?= @text('LIB-AN-ACTION-ADD') ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <?php // @todo add por[longitude] and por[latitude] to the url ?>

        <div id="locations-container">
            <?php $url = 'layout=selector_list&locatable_id='.$locatable->id; ?>
            <?= @helper('ui.filterbox', @route($url)) ?>
            <div class="an-entities" data-trigger="InfiniteScroll" data-url="<?= @route($url) ?>"></div>
        </div>
    </div>
</div>
