<div class="form-group">

    {!! Form::label('mr_tender_list', 'MR:') !!}
    {!! Form::select('mr_tender_list[]',$mr,null,[ 'class'=>'form-control','id'=> 'mr_tender_list' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::label('mr_t_no', 'Tender No.:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_no',$tender->mr_t_no, ['class'=> 'form-control']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_subject', 'Subject:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_subject',$tender->mr_t_subject, ['class'=> 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_identity', 'Identity:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::select('mr_t_identity',['Foreign'=>'Foreign' ,'Local'=>'Local' ],$tender->mr_t_identity, ['class'=> 'form-control' ,'id'=>'tender_identity']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_willing_fax', 'Willing Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_willing_fax',$tender->mr_t_willing_fax, ['class'=> 'form-control','id'=>'datetimepicker51']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_willing_fax_closing_date', 'Closing Date For Willing Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_willing_fax_closing_date',$tender->mr_t_willing_fax_closing_date, ['class'=> 'form-control','id'=>'datetimepicker52']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_prepare_draft', 'Prepared Draft:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_prepare_draft',$tender->mr_t_prepare_draft, ['class'=> 'form-control','id'=>'datetimepicker53']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sub_bid_committee_formation_memo', 'Memo For Sub-BidCommittee Formation:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sub_bid_committee_formation_memo',$tender->mr_t_sub_bid_committee_formation_memo, ['class'=> 'form-control','id'=>'datetimepicker54']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_tender_criteria_memo', 'Tenders Criteria Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_criteria_memo',$tender->mr_t_tender_criteria_memo, ['class'=> 'form-control','id'=>'datetimepicker55']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_criteria_memo_reply', 'Reply on Tenders Criteria Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_criteria_memo_reply',$tender->mr_t_tender_criteria_memo_reply, ['class'=> 'form-control','id'=>'datetimepicker56']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_call_for_tender_memo', 'Call for Tender Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_call_for_tender_memo',$tender->mr_t_tender_call_for_tender_memo, ['class'=> 'form-control','id'=>'datetimepicker57']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_call_for_tender_signature', 'Call For Tender Approval:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_call_for_tender_signature',$tender->mr_t_tender_call_for_tender_signature, ['class'=> 'form-control','id'=>'datetimepicker58']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tender_send_invitation_fax', 'Invitation Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tender_send_invitation_fax',$tender->mr_t_tender_send_invitation_fax, ['class'=> 'form-control','id'=>'datetimepicker59']) !!}

        </div>
    </div>
</div>


<div class="form-group">

    {!! Form::label('suppliers_tender_list', 'Invited Suppliers:') !!}
    {!! Form::select('suppliers_tender_list[]',$suppliers,null,[ 'class'=>'form-control','id'=> 'suppliers_tender_list' ,'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::label('mr_t_closing_date', 'Tender Closing Date:') !!}
    <div class="row">
        <div class='col-sm-6'>

            {!! Form::input('text','mr_t_closing_date',$tender->mr_t_closing_date, ['class'=> 'form-control','id'=>'datetimepicker60']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_sent_to_tech_dept', 'Clarifications sent to Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_sent_to_tech_dept',$tender->mr_t_clarifications_sent_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker61']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_received_from_tech_dept', 'Clarifications Received From Tech. Dept.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_received_from_tech_dept',$tender->mr_t_clarifications_received_from_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker62']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_clarifications_reply_fax', 'Clarifications Received from Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_clarifications_reply_fax',$tender->mr_t_clarifications_reply_fax, ['class'=> 'form-control','id'=>'datetimepicker63']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_open_tech_envelops', 'Tech. Envelops Opening.:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_open_tech_envelops',$tender->mr_t_open_tech_envelops, ['class'=> 'form-control','id'=>'datetimepicker64']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_received_tech_clarifications_from_tech_dept', 'Technical Dept. Clarifications on Offers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_received_tech_clarifications_from_tech_dept',$tender->mr_t_received_tech_clarifications_from_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker65']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sending_tech_clarifications_to_suppliers', 'Sending Tech. Clarifications to Suppliers:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_tech_clarifications_to_suppliers',$tender->mr_t_sending_tech_clarifications_to_suppliers, ['class'=> 'form-control','id'=>'datetimepicker66']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_receive_tech_clarifications_reply', 'Suppliers Reply on Tech. Clarifications:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_receive_tech_clarifications_reply',$tender->mr_t_receive_tech_clarifications_reply, ['class'=> 'form-control','id'=>'datetimepicker67']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_send_tech_clarifications_reply_to_tech_dept', 'Sent Clarifications Reply to Tech. Dept.') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_send_tech_clarifications_reply_to_tech_dept',$tender->mr_t_send_tech_clarifications_reply_to_tech_dept, ['class'=> 'form-control','id'=>'datetimepicker68']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_receive_tech_evaluation_report', 'Tech. Evaluation Report:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_receive_tech_evaluation_report',$tender->mr_t_receive_tech_evaluation_report, ['class'=> 'form-control','id'=>'datetimepicker69']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    {!! Form::label('mr_t_issue_tech_evaluation', 'Tech Evaluation issuance:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_issue_tech_evaluation',$tender->mr_t_issue_tech_evaluation, ['class'=> 'form-control','id'=>'datetimepicker70']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_tech_eval_signature', 'Tech. Evaluation Signature:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_tech_eval_signature',$tender->mr_t_tech_eval_signature, ['class'=> 'form-control','id'=>'datetimepicker71']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_open_commercial_offers', 'Opening Commercial Envelops') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_open_commercial_offers',$tender->mr_t_open_commercial_offers, ['class'=> 'form-control','id'=>'datetimepicker72']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_issue_commercial_evaluation', 'Commercial Evaluation issuance:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_issue_commercial_evaluation',$tender->mr_t_issue_commercial_evaluation, ['class'=> 'form-control','id'=>'datetimepicker73']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_commercial_evaluation_signature', 'Commercial Evaluation Signature') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_commercial_evaluation_signature',$tender->mr_t_commercial_evaluation_signature, ['class'=> 'form-control','id'=>'datetimepicker74']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mr_t_sending_awarding_faxes', 'Sending Awarding Fax:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_awarding_faxes',$tender->mr_t_sending_awarding_faxes, ['class'=> 'form-control','id'=>'datetimepicker75']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::label('mr_t_sending_fin_memo', 'Sending Finance Memo:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!! Form::input('text','mr_t_sending_fin_memo',$tender->mr_t_sending_fin_memo, ['class'=> 'form-control','id'=>'datetimepicker76']) !!}
        </div>
    </div>
</div>




<div class="form-group">
    {!! Form::label('mr_t_finished', 'Tender Finished:') !!}
    <div class="row">
        <div class='col-sm-6'>
            {!!Form::radio('mr_t_finished', 1) !!} Yes
            {!! Form::radio('mr_t_finished', 0) !!} No
        </div>
    </div>
</div>



<div class="form-group">

    {!! Form::label('tag_list_tender', 'Tags:') !!}
    {!! Form::select('tag_list_tender[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list_tender' ,'multiple']) !!}
</div>



<div class="form-group">
    {!! Form::submit($submitButtonText , ['class' => 'btn btn-primary form-control' ]) !!}
</div>




