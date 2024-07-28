<div class="card">
    <div class="card-header">

        <h3 class="card-title">
            <a href="{{ url()->previous() }}" type="button" class="mr-1 mb-1 btn-primary btn-sm btn sm round">
                <i class="fas fa-undo"></i>&nbsp; Back
            </a>  | View | <small> SAP Journal Entry Configurations</small>
        </h3>
    </div>


    <!-- /.card-header -->
    <div class="card-body p-0">

      <table class="table table-striped table-responsive table-with-responsive">
        <thead>
          <tr>
            <th> PARAMETER </th>
            <th> VALUE </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="color:gray;"><b>Journal Entry Name</b></td>
            <td>{{ $sap_journal_entry_config[0]->jec_name ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Config Type</b></td>
            <td>{{ $sap_journal_entry_config[0]->config_type ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Object Node Sender Technical ID</b></td>
            <td>{{ $sap_journal_entry_config[0]->object_node_sender_technical_id ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Company ID</b></td>
            <td>{{ $sap_journal_entry_config[0]->company_id ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Original Entry Document Reference </b></td>
            <td>{{ $sap_journal_entry_config[0]->original_entry_document_reference_id ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b> Original Entry Document Reference Business System_id </b></td>
            <td>{{ $sap_journal_entry_config[0]->original_entry_document_reference_business_system_id ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b> Accounting Business Transaction Type Code </b></td>
            <td>{{ $sap_journal_entry_config[0]->accounting_business_transaction_type_code ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Accounting Document Type Code </b></td>
            <td>{{ $sap_journal_entry_config[0]->accounting_document_type_code ?? '' }}</td>
          </tr>
          <tr>
            <td style="color:gray;"><b>Original Entry Document Item Reference Item ID </b></td>
            <td>{{ $sap_journal_entry_config[0]->original_entry_document_item_reference_item_id ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 1 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code1 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code1 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 2 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code2 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code2 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 3 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code3 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code3 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 4 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code4 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code4 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 5 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code5 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code5 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 6 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code6 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code6 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 7 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code7 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code7 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 8 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code8 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code8 ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>General Ledger Account Alias Code 9 </b></td>
            <td><b>{{ $sap_journal_entry_config[0]->title_alias_code9 ?? '' }}:</b> {{ $sap_journal_entry_config[0]->general_ledger_account_alias_code9 ?? '' }}</td>
          </tr>



          <tr>
            <td style="color:gray;"><b>Currency Code </b></td>
            <td>{{ $sap_journal_entry_config[0]->currency_code ?? '' }}</td>
          </tr>


          <tr>
            <td style="color:gray;"><b>Created</b></td>
            <td>{{ $sap_journal_entry_config[0]->created_at ?? '' }}</td>
          </tr>

          <tr>
            <td style="color:gray;"><b>Last Updated</b></td>
            <td>{{ $sap_journal_entry_config[0]->updated_at ?? '' }}</td>
          </tr>

        </tbody>
      </table>

      <form method="post" action="{{ url('sap_journal_entry_config/'.$sap_journal_entry_config[0]->pid_jec.'/edit') }}"  enctype="multipart/form-data">
        @csrf
        @method('get')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp; Edit Configuration </button>
            </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>


