<?= $this->extend('base') ?>

<?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="booking-cta">
                    <h1>Book your flight today</h1>
                    <p>Flights so good, you won’t want to get off</p>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="booking-form">
                    <form action="search" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Flying from</span>
                                    <input name="from" class="form-control" type="text" placeholder="City or airport">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Flyning to</span>
                                    <input name="to" class="form-control" type="text" placeholder="City or airport">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Flying Date</span>
                                    <input name="flaying_date" class="form-control" type="date" required>
                                </div>
                            </div>
                        </div>
<!--                        <div class="row">-->
<!--                            <div class="col-md-4">-->
<!--                                <div class="form-group">-->
<!--                                    <span class="form-label">Adults (18+)</span>-->
<!--                                    <select class="form-control">-->
<!--                                        <option>1</option>-->
<!--                                        <option>2</option>-->
<!--                                        <option>3</option>-->
<!--                                    </select>-->
<!--                                    <span class="select-arrow"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4">-->
<!--                                <div class="form-group">-->
<!--                                    <span class="form-label">Children (0-17)</span>-->
<!--                                    <select class="form-control">-->
<!--                                        <option>0</option>-->
<!--                                        <option>1</option>-->
<!--                                        <option>2</option>-->
<!--                                    </select>-->
<!--                                    <span class="select-arrow"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4">-->
<!--                                <div class="form-group">-->
<!--                                    <span class="form-label">Travel class</span>-->
<!--                                    <select class="form-control">-->
<!--                                        <option>Economy class</option>-->
<!--                                        <option>Business class</option>-->
<!--                                        <option>First class</option>-->
<!--                                    </select>-->
<!--                                    <span class="select-arrow"></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-btn">
                            <button type="submit" class="submit-btn">Show flights</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>