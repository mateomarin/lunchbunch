<div id="modal3" class="modal">
    <div class="modal-content">
        <div class="row">
            <form action="/Takeouts/add_takeout" class="col s12">
                <input type="hidden" name="ride_id" value="<?= $rides['id']?>">
                <input type="hidden" name="takeout_fee" value="<?= $rides['takeout_fee']?>">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                        <label for="textarea1">Write out your takeout order:</label>
                    </div>
                    <div class="input-field col s12">
                        <p>Driver's Fee: <?= $rides['takeout_fee']?></p>
                    </div>
                    <div class="input-field col s6">
                        <input class="btn" type="submit" name="name" value="Place Order">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>