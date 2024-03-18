<template>
    <div>
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Take Down Request</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Domains</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row" style="background-color: #fef9c3; margin-bottom: 10px;">
            <div class="col-md-6">
              <p class="m-2">facebook.com</p>
            </div>
            <div class="col-md-6">
              <p class="text-danger m-2">High Risk</p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header bg-black">
                <h3 class="card-title">Take Down Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body bg-yellow">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Domain Name *</label>
                    <div class="col-sm-8">
                      <select class="form-control">
                          <option value="">...Choose domain to safeguard...</option>
                          <option>xyz.com</option>
                          <option>abc.com</option>
                      </select>                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Report Domain *</label>
                    <div class="col-sm-8">
                      <select class="form-control">
                          <option value="">...Choose domain to report...</option>
                          <option>xyz.com</option>
                          <option>abc.com</option>
                      </select>                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Abuse Type *</label>
                    <div class="col-sm-8">
                      <select class="form-control">
                          <option value="">...Choose abuse type...</option>
                          <option>Spoofing</option>
                          <option>Phishing</option>
                      </select>                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Additional Notes</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" placeholder=""></textarea>                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Carbon Copy (CC) the Request</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="john@example.com">                
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Attachments</label>
                      <div class="col-sm-8">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose files</label>
                      </div>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Please Confirm *</label>
                      <div class="col-sm-8">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">I confirm that the website I am reporting is a fake, phishing, or spoofing site. I understand that false reports can harm legitimate websites and agree to report only suspicious websites that I am certain about. I take full responsibility for this report</label>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-black">
                  <button type="submit" class="btn btn-primary rounded-button">Cancel</button>
                  <button type="submit" class="btn btn-warning rounded-button float-right">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header bg-black">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn color-white"></i>
                  Details
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body bg-warning">
                <div class="callout callout-success">
                  <h5>I am a success callout!</h5>

                  <p>This is a green callout.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  </template>
  
  