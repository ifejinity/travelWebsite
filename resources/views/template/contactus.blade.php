@extends('layout.layout')
{{-- contact us form --}}
@section('contactUs')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative pt-[30px]"> 
        <div class="flex flex-col md:px-[10%] px-[5%] gap-3 max-w-[1440px] w-full">
            <h1 class="text-bold text-[24px] font-[900]">CONTACT US</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <form class="flex flex-col" id="contactUsForm">
                <h1 class="font-[400] text-[18px] text-gray-600 mb-5">Question not answered yet? We are here to help!</h1>
                <div class="flex md:flex-row flex-col gap-x-5">
                    <div class="w-full mb-3">
                        <input type="text" name="fullname" placeholder="Fullname" class="input input-bordered w-full" />
                        <span class="text-[14px] text-red-500" id="errorFullname"></span>
                    </div>
                    <div class="w-full mb-3">
                        <input type="text" name="email" placeholder="Email" class="input input-bordered w-full" />
                        <span class="text-[14px] text-red-500" id="errorEmail"></span>
                    </div>
                </div>
                <input type="text" name="subject" placeholder="Subject" class="input input-bordered w-full" />
                <span class="text-[14px] text-red-500 mb-3" id="errorSubject"></span>
                <textarea name="message" class="textarea textarea-bordered resize-none text-base" placeholder="Message" rows="5"></textarea>
                <span class="text-[14px] text-red-500 mb-3" id="errorMessage"></span>
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-400 text-white self-end w-full max-w-[200px] disabled:bg-blue-500 disabled:text-white" id="emailSend">Send</button>
            </form>
        </div>
    </div>
@endsection
{{-- js --}}
@section('js')
    <script>
        // sending an email
        $("#emailSend").click(function (e) { 
            e.preventDefault();
            let fullname = $("#contactUsForm input[name=fullname]").val();
            let email = $("#contactUsForm input[name=email]").val();
            let subject = $("#contactUsForm input[name=subject]").val();
            let message = $("#contactUsForm textarea[name=message]").val();
            // sending 
            $(this).html(`Sending<span class="loading loading-spinner loading-xs"></span>`).prop('disabled', true);
            setTimeout(() => {
                $.ajax({
                    type: "POST",
                    url: "{{ route('email') }}",
                    data: {fullname:fullname, email:email, subject:subject, message:message},
                    headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        // reset error messages value
                        $("#errorFullname").html("");
                        $("#errorEmail").html("");
                        $("#errorSubject").html("");
                        $("#errorMessage").html("");
                        console.log(response)
                        if(response.status == 200) {
                            Toastify({
                                text: response.message,
                                className: "info",
                                style: {
                                    background: "#22c55e",
                                }
                            }).showToast();
                            // reset input values upon succession
                            $("#contactUsForm input[name=fullname]").val("");
                            $("#contactUsForm input[name=email]").val("");
                            $("#contactUsForm input[name=subject]").val("");
                            $("#contactUsForm textarea[name=message]").val("");
                        } else {
                            Toastify({
                                text: response.message,
                                className: "info",
                                style: {
                                    background: "#ef4444",
                                }
                            }).showToast();
                            // set error messages value
                            $("#errorFullname").html(response.errorMessages.fullname);
                            $("#errorEmail").html(response.errorMessages.email);
                            $("#errorSubject").html(response.errorMessages.subject);
                            $("#errorMessage").html(response.errorMessages.message);
                        }
                        // sent
                        $("#emailSend").html("Send").prop('disabled', false);
                    }
                });
            }, 1000);
        });
    </script>
@endsection