<div class="feedback left">
    <div class="tooltips">
        <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bug fa-2x" title="Report Bug"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form">
                <li>
                    <div class="report">
                        <h5 class="text-center">Report Bug</h5>
                        <form class="doo" method="post" action="{{ route('bug_report.store') }}">
                            {!! csrf_field() !!}
                            <div class="col-sm-12">
                                <input required name="email" type="email" class="form-control" placeholder="Your Email">
                                <textarea required name="comment" class="form-control" placeholder="Please tell us what bug or issue you've found, provide as much detail as possible."></textarea>
                                <input name="screenshot" type="hidden" class="screen-uri">
                                <span class="screenshot pull-right"><i class="fa fa-camera cam" title="Take Screenshot"></i></span>
                            </div>
                            <div class="col-sm-12 clearfix">
                                <button class="btn btn-primary btn-block">Submit Report</button>
                            </div>
                        </form>
                    </div>
                    <div class="loading text-center hideme">
                        <h2>Please wait...</h2>
                        <h2><i class="fa fa-refresh fa-spin"></i></h2>
                    </div>
                    <div class="reported text-center hideme">
                        <h2>Thank you!</h2>
                        <p>Your submission has been received, we will review it shortly.</p>
                        <div class="col-sm-12 clearfix">
                            <button class="btn btn-success btn-block do-close">Close</button>
                        </div>
                    </div>
                    <div class="failed text-center hideme">
                        <h2>Oh no!</h2>
                        <p>Your bugreport was successfully submitted.</p>
                        <div class="col-sm-12 clearfix">
                            <button class="btn btn-danger btn-block do-close">Close</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>