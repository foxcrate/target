@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')

<div class="container inbox">
    <div class="row">
        <div class="col-md-12">
            <div class="card-inbox">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0"><i class="fas fa-mail-bulk"></i> {{count($inbox_messages)}} رسالة</h3>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-danger">
                                            <a href="#">
                                                <button class="btn btn-circle btn-danger text-white" onclick="submit_form()">
                                                    <i class="fa fa-trash"></i> حذف
                                                </button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>
                                        <!-- row -->
                                        @foreach( $inbox_messages as $message )
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input delete_checkbox" value="{{$message->id}}" id="{{$message->id}}" />
                                                    <label class="custom-control-label" for="{{$message->id}}">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <td>
                                                <a href="{{route('message.past_messages',[ 'sender_id'=> $message->sender_user->id , 'receiver_id'=> $message->receiver_user->id ])}}" class="text-dark">{{$message->sender_user->name}}</a>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    {{-- <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span> --}}
                                                    <a href="{{route('message.past_messages',[ 'sender_id'=> $message->sender_user->id , 'receiver_id'=> $message->receiver_user->id ])}}" class="text-dark">{{$message->title}}</a>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted">{{$message->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function submit_form(){
        //alert("Alo");
        var checkedInputs = document.querySelectorAll(" input[type='checkbox']:checked , [class='delete_checkbox'] ");
        ids_array=[];
        checkedInputs.forEach(element => {
            ids_array.push(element.value);
        });

        //console.log(ids_array);
        //console.log(checkedInputs[0].value);
        //document.getElementById("delete_form").submit();

        if( ids_array.length >0 ){
            var formData = {
                ids:ids_array,
            };
            //alert(formData);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('message.delete') }}" ,
                data: formData,
                dataType: "json",
                encode: true,
                }).done(function (data) {
                console.log("From Server: ",data);
            });
        }else{
            alert("Please Select A Message To Delete");
        }

    }

</script>

@endsection
