@extends('dashlayouts.master')
@section('title')
dashboard
@endsection


@section('title-bage1')


Home

@endsection


@section('title-bage2')
dashboard
@endsection


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Donated Items</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Donation Form</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Donated Servives</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Donatione</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div></div>


      <div class="container-fluid" style="margin-top: 70px; margin-bottom: 100px;">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('assets/img/Capture.PNG') }}" alt="User Image" style="width: 100%; max-width: 500px;">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100%;">
                        <caption class="text-center">Average Annual Donation (in dollars)</caption>
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total</th>
                                <th>Men (ref.)</th>
                                <th>Women</th>
                                <th>Age</th>
                                <th>15 to 19</th>
                                <th>20 to 24</th>
                                <th>25 to 34</th>
                                <th>35 to 44 (ref.)</th>
                                <th>45 to 54</th>
                                <th>55 to 64</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2013</td>
                                <td>531</td>
                                <td>580</td>
                                <td>484*</td>
                                <td>15 to 19</td>
                                <td>156*</td>
                                <td>245*</td>
                                <td>364</td>
                                <td>427</td>
                                <td>664*</td>
                                <td>681*</td>
                            </tr>
                            <tr>
                                <td>2010</td>
                                <td>470†</td>
                                <td>491†</td>
                                <td>451</td>
                                <td>136*</td>
                                <td>169*</td>
                                <td>322*</td>
                                <td>454</td>
                                <td>502†</td>
                                <td>660*</td>
                            </tr>
                            <tr>
                                <td>2007</td>
                                <td>481</td>
                                <td>499†</td>
                                <td>465</td>
                                <td>125*</td>
                                <td>193*</td>
                                <td>351*</td>
                                <td>488</td>
                                <td>601*</td>
                                <td>548†</td>
                            </tr>
                            <tr>
                                <td>2004</td>
                                <td>469†</td>
                                <td>504</td>
                                <td>438*</td>
                                <td>102*</td>
                                <td>208*</td>
                                <td>364</td>
                                <td>434</td>
                                <td>580*</td>
                                <td>586*</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        </section>


@endsection

@section('scripts')

@endsection
