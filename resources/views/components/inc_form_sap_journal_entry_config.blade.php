


<!--##### WEB-HR PAYROLL CONFIG FORM #####-->
<form method="post" action="{{ route('sap_journal_entry_config.store') }}"  enctype="multipart/form-data">
    @csrf


<!--##### TEXT CONFIG NAME #####-->
@component('form.text')
    @slot('name') jec_name @endslot
    @slot('label') Journal Entry Config Name @endslot
    @slot('value')@endslot
    @slot('placeholder') Config1 @endslot
    @slot('icon') fas fa-cog @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### SELECT CONFIG TYPE #####-->
@component('form.select')
    @slot('name') config_type @endslot
    @slot('label') Config Type @endslot
    @slot('value')@endslot
    @slot('placeholder')@endslot
    @slot('icon') fas fa-cogs @endslot
    @slot('required') required @endslot
        @slot('options')
            <option value="SAP-JOURNAL-ENTRY-WEBHR-PAYROLL">SAP-JOURNAL-ENTRY-WEBHR-PAYROLL</option>
        @endslot
@endcomponent


<!--##### SELECT COMMUNICATION COMPONENTS #####-->
@component('form.select')
    @slot('name') pid_coco @endslot
    @slot('label') Communication Component @endslot
    @slot('value')@endslot
    @slot('placeholder')@endslot
    @slot('icon') fas fa-cogs @endslot
    @slot('required') required @endslot
    @slot('options')
        <option value="">- Select Communication Component -</option> 
        @foreach($sap_communication_components as $communication_components)
            <option value="{{$communication_components->pid_coco ?? ''}}">{{$communication_components->coco_name ?? '' }}</option> 
        @endforeach
    @endslot
@endcomponent


<!--##### TEXT OBJECT NODE SENDER TECHNICAL ID  #####-->
@component('form.text')
    @slot('name') object_node_sender_technical_id  @endslot
    @slot('label') Object Node Sender Technical ID @endslot
    @slot('value')@endslot
    @slot('placeholder') 234532335347556889 @endslot
    @slot('icon') bi bi-file-earmark-person @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT COMPANY ID  #####-->
@component('form.text')
    @slot('name') company_id  @endslot
    @slot('label') Company ID @endslot
    @slot('value')@endslot
    @slot('placeholder') 335347556889 @endslot
    @slot('icon') bi bi-file-earmark-person-fill @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT ORIGINAL ENTRY DOCUMENT REFERENCE ID  #####-->
@component('form.text')
    @slot('name') original_entry_document_reference_id  @endslot
    @slot('label') Original Entry Document Reference ID @endslot
    @slot('value')@endslot
    @slot('placeholder') 53475568 @endslot
    @slot('icon') bi bi-file-earmark-post @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT ORIGINAL ENTRY DOCUMENT REFERENCE BUSINESS SYSTEM ID  #####-->
@component('form.text')
    @slot('name') original_entry_document_reference_business_system_id  @endslot
    @slot('label') Original Entry Document Reference Business System Id @endslot
    @slot('value')@endslot
    @slot('placeholder') 7556889 @endslot
    @slot('icon') bi bi-file-earmark-post-fill @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT ACCOUNTING BUSINESS TRANSACTION TYPE CODE  #####-->
@component('form.text')
    @slot('name') accounting_business_transaction_type_code  @endslot
    @slot('label') Accounting Business Transaction Type Code @endslot
    @slot('value')@endslot
    @slot('placeholder') 177 @endslot
    @slot('icon') bi bi-distribute-horizontal @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT ACCOUNTING DOCUMENT TYPE CODE  #####-->
@component('form.text')
    @slot('name') accounting_document_type_code  @endslot
    @slot('label') Accounting Document Type Code @endslot
    @slot('value')@endslot
    @slot('placeholder') 00107 @endslot
    @slot('icon') bi bi-distribute-vertical @endslot
    @slot('required') required @endslot
@endcomponent


<!--##### TEXT ORIGINAL ENTRY DOCUMENT ITEM REFERENCE ITEM ID  #####-->
@component('form.text')
    @slot('name') original_entry_document_item_reference_item_id  @endslot
    @slot('label') Original Entry Document Item Reference Item ID @endslot
    @slot('value')@endslot
    @slot('placeholder') 107 @endslot
    @slot('icon') bi bi-file @endslot
    @slot('required') required @endslot
@endcomponent



<!--##### TEXT GENERAL LEDGER ACCOUNT ALIAS CODE  #####-->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code1  @endslot
            @slot('label') Title Alias Code 1 @endslot
            @slot('value')@endslot
            @slot('placeholder') Basic Salary @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code1  @endslot
            @slot('label') General Ledger Account Alias Code 1 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code2  @endslot
            @slot('label') Title Alias Code 2 @endslot
            @slot('value')@endslot
            @slot('placeholder') Housing Allowance @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code2  @endslot
            @slot('label') General Ledger Account Alias Code 2 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code3  @endslot
            @slot('label') Title Alias Code 3 @endslot
            @slot('value')@endslot
            @slot('placeholder')Transport Allowance @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code3  @endslot
            @slot('label') General Ledger Account Alias Code 3 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code4  @endslot
            @slot('label') Title Alias Code 4 @endslot
            @slot('value')@endslot
            @slot('placeholder') Tax Deduction @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code4  @endslot
            @slot('label') General Ledger Account Alias Code 4 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code5  @endslot
            @slot('label') Title Alias Code 5 @endslot
            @slot('value')@endslot
            @slot('placeholder') Additional Payment 1 @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code5  @endslot
            @slot('label') General Ledger Account Alias Code 5 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code6  @endslot
            @slot('label') Title Alias Code 6 @endslot
            @slot('value')@endslot
            @slot('placeholder') Additional Payment 2 @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code6  @endslot
            @slot('label') General Ledger Account Alias Code 6 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code7  @endslot
            @slot('label') Title Alias Code 7 @endslot
            @slot('value')@endslot
            @slot('placeholder') Additional Payment 3 @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code7  @endslot
            @slot('label') General Ledger Account Alias Code 7 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code8  @endslot
            @slot('label') Title Alias Code 8 @endslot
            @slot('value')@endslot
            @slot('placeholder') Additional Payment 4 @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code8  @endslot
            @slot('label') General Ledger Account Alias Code 8 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>
<!----------------div--------------->
<div class="row">
    <div class="col-6">
        @component('form.text')
            @slot('name') title_alias_code9  @endslot
            @slot('label') Title Alias Code 9 @endslot
            @slot('value')@endslot
            @slot('placeholder') Additional Payment 5 @endslot
            @slot('icon') bi bi-file @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
    <div class="col-6">
        @component('form.text')
            @slot('name') general_ledger_account_alias_code9  @endslot
            @slot('label') General Ledger Account Alias Code 9 @endslot
            @slot('value')@endslot
            @slot('placeholder') A-1207 @endslot
            @slot('icon') bi bi-file-earmark-post @endslot
            @slot('required') @endslot
        @endcomponent
    </div>
</div>


<!--##### TEXT CURRENCY CODE  #####-->
@component('form.select')
    @slot('name') currency_code  @endslot
    @slot('label') CURRENCY CODE @endslot
    @slot('value')@endslot
    @slot('placeholder') USD @endslot
    @slot('icon') bi bi-cash @endslot
    @slot('required') required @endslot
    @slot('options')
            <option value="USD">USD</option>
            <option value="NGN">NGN</option>
            <option value="GBP">GBP</option>
        @endslot
@endcomponent


<!--##### SUBMIT BUTTON #####-->
@component('form.button')
    @slot('name') Add Configuration @endslot
    @slot('value') buttonx @endslot
    @slot('color') primary @endslot
    @slot('icon') fas fa-plus @endslot
@endcomponent

</form>
