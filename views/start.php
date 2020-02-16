<?php
require "header.php";
?>
<!--
    <?php //if (isset($_GET['success']) && $_GET['success']): 
    ?>
        <p>Your object was successfully inserted! If you want to see your object click <a href="/index.php?page=update&id=<?php echo $_GET['id'] ?>">here</a></p>
    <?php //endif; 
    ?>

    <?php //if (isset($_GET['success']) && !$_GET['success']): 
    ?>
        <p>Something went wrong!</p>
    <?php //endif; 
    ?>


-->




<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Form

                    <a href="../index.php?page=start">Entry</a>
                    <a href="../index.php?page=show">List</a>
                </div>
                <div class="card-body">
                    <form id="dataForm">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" required name="amount" class="form-control" id="amount" placeholder="Amount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="buyer">Buyer</label>
                                    <input type="text" required name="buyer" class="form-control" id="buyer" placeholder="Buyer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="receipt_id">Receipt ID</label>
                                    <input type="text" required name="receipt_id" class="form-control" id="receipt_id" placeholder="Receipt ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="items">Items</label>
                                    <input type="text" required name="items" class="form-control" id="items" placeholder="Items">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="buyer_email">Buyer Email</label>
                                    <input type="email" required name="buyer_email" class="form-control" id="buyer_email" placeholder="Buyer Email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" required name="city" class="form-control" id="city" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" required name="phone" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="entry_by">Entry By</label>
                                    <input type="number" required name="entry_by" class="form-control" id="entry_by" placeholder="Entry By">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea required name="note" class="form-control" id="note" placeholder="Note..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subBtn"></label>
                                    <button type="submit" name="subBtn" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>

        </div>
    </div>
</div>








<?php
require "footer.php";
?>