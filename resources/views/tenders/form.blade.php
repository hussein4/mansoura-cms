<div class="form-group">

    {!! Form::label('mr_list_tender', 'MR:') !!}
    {!! Form::select('mr_list_tender[]',$mr,null,[ 'class'=>'form-control','id'=> 'mr_list_tender' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::label('mr_t_no', 'Tender No.:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_no',$tender->mr_t_no, ['class'=> 'form-control','id'=>'datetimepicker21']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_subject', 'Subject:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_subject',$tender->mr_t_subject, ['class'=> 'form-control','id'=>'datetimepicker22']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_identity', 'Identity:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::select('mr_t_identity',['1'=>'Foreign' ,'2'=>'Local' ],$tender->mr_t_identity, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>>

<div class="form-group">
    {!! Form::label('mr_t_willing_fax', 'Willing Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_willing_fax',$tender->mr_t_willing_fax, ['class'=> 'form-control']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_willing_fax_closing_date', 'Closing Date For Willing Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_willing_fax_closing_date',$tender->mr_t_willing_fax_closing_date, ['class'=> 'form-control']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_prepare_draft', 'Prepared Draft:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_prepare_draft',$tender->mr_t_prepare_draft, ['class'=> 'form-control','id'=>'datetimepicker24']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sub_bid_committee_formation_memo', 'Memo For Sub-BidCommittee Formation:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sub_bid_committee_formation_memo',$tender->mr_t_sub_bid_committee_formation_memo, ['class'=> 'form-control','id'=>'datetimepicker25']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_rfq_closing_date', 'RFQ Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_rfq_closing_date',$tender->mr_rfq_closing_date, ['class'=> 'form-control','id'=>'datetimepicker26']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_tender_criteria_memo', 'Tenders Criteria Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_criteria_memo',$tender->mr_t_tender_criteria_memo, ['class'=> 'form-control','id'=>'datetimepicker27']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_criteria_memo_reply', 'Reply on Tenders Criteria Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_tender_criteria_memo_reply',$tender->mr_t_tender_criteria_memo_reply, ['class'=> 'form-control','id'=>'datetimepicker28']) !!}


        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_call_for_tender_memo', 'Call for Tender Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_call_for_tender_memo',$tender->mr_t_tender_call_for_tender_memo, ['class'=> 'form-control','id'=>'datetimepicker29']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_call_for_tender_signature', 'Call For Tender Approval:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_call_for_tender_signature',$tender->mr_t_tender_call_for_tender_signature, ['class'=> 'form-control','id'=>'datetimepicker30']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_send_invitation_fax', 'Invitation Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_send_invitation_fax',$tender->mr_t_tender_send_invitation_fax, ['class'=> 'form-control','id'=>'datetimepicker31']) !!}

        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('mr_t_closing_date', 'Tender Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_closing_date',$tender->mr_t_closing_date, ['class'=> 'form-control','id'=>'datetimepicker32']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_sent_to_tech_dept', 'Clarifications sent to Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_sent_to_tech_dept',$tender->mr_t_clarifications_sent_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker33']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_received_from_tech_dept', 'Clarifications Received From Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_received_from_tech_dept',$tender->mr_t_clarifications_received_from_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker34']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_reply_fax', 'Clarifications Received from Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_reply_fax',$tender->mr_t_clarifications_reply_fax, ['class'=> 'form-control','id'=>'datetimepicker35']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_open_tech_envelops', 'Tech. Envelops Opening.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_open_tech_envelops',$tender->mr_t_open_tech_envelops, ['class'=> 'form-control','id'=>'datetimepicker36']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_received_tech_clarifications_from_tech_dept', 'Technical Dept. Clarifications on Offers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_received_tech_clarifications_from_tech_dept',$tender->mr_t_received_tech_clarifications_from_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker37']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sending_tech_clarifications_to_suppliers', 'Sending Tech. Clarifications to Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_tech_clarifications_to_suppliers',$tender->mr_t_sending_tech_clarifications_to_suppliers, ['class'=> 'form-control','id'=>'datetimepicker38']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_receive_tech_clarifications_reply', 'Suppliers Reply on Tech. Clarifications:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_receive_tech_clarifications_reply',$tender->mr_t_receive_tech_clarifications_reply, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_send_tech_clarifications_reply_to_tech_dept', 'Sent Clarifications Reply to Tech. Dept.') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_send_tech_clarifications_reply_to_tech_dept',$tender->mr_t_send_tech_clarifications_reply_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_receive_tech_evaluation_report', 'Tech. Evaluation Report:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_receive_tech_evaluation_report',$tender->mr_t_receive_tech_evaluation_report, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>




$table->boolean('')->nullable();


<div class="form-group">
    {!! Form::label('mr_t_issue_tech_evaluation', 'Tech Evaluation issuance:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_issue_tech_evaluation',$tender->mr_t_issue_tech_evaluation, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tech_eval_signature', 'Tech. Evaluation Signature:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tech_eval_signature',$tender->mr_t_tech_eval_signature, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_open_commercial_offers', 'Opening Commercial Envelops') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_open_commercial_offers',$tender->mr_t_open_commercial_offers, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_issue_commercial_evaluation', 'Commercial Evaluation issuance:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_issue_commercial_evaluation',$tender->mr_t_issue_commercial_evaluation, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_commercial_evaluation_signature', 'Commercial Evaluation Signature') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_commercial_evaluation_signature',$tender->mr_t_commercial_evaluation_signature, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sending_awarding_faxes', 'Sending Awarding Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_awarding_faxes',$tender->mr_t_sending_awarding_faxes, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_sending_fin_memo', 'Sending Finance Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_fin_memo',$tender->mr_t_sending_fin_memo, ['class'=> 'form-control','id'=>'datetimepicker39']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_finished', 'Tender Finished:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::checkbox('finished','1',$tender->mr_t_finished, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>




<div class="form-group">
    <!--<select class="tag_list" multiple="multiple" data-tags="true  style="width: 50%">   -->
    {!! Form::label('tag_list_tender', 'Tags:') !!}
    {!! Form::select('tag_list_tender[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_tender' ,'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::label('created_at', 'Created On:') !!}
    {!! Form::input('date','created_on', $tender->created_at , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>

<script type="text/javascript">

    $('#tag_list_mr').select2({
        placeholder: 'choose a Tag',
        tags:true,
        data:[

        ]

    });

</script>

