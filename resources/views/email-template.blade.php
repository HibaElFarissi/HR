<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Subject: Request for Support: Human Resource Website <br>

                    Dear {!!$name!!},<br>

                    I hope this email finds you well.<br>
                    I am writing to you today to discuss our recent efforts in developing <br> a human resource application using the Laravel PHP framework. <br>
                    Our team has been working hard to build a reliable and user-friendly HR application that<br> meets the unique needs and requirements of our organization.

                    We would be happy to provide you with more information about our HR application  <br>and how it can benefit your organization. Please do not hesitate to reach  <br> out to us if you have any questions or would like to schedule a demonstration.

                    Thank you for your time and consideration.<br>

                    Best regards,<br>
                    {!!$name!!}

                </div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
               </div>
           </div>
       </div>
   </div>
</div>
