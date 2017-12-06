<main class="main--body--content">
            <div class="main--body--container">
                <div class="container-fluid">
                    <div class="div-height-80"></div>
                    


<style>
    .div-ticket-content {
        max-width: 1000px;
        margin: 0 auto;
    }
    button.btn.btn-open-ticket {
        border-color: #f8b13d;
        background: #f8b13d;
        color: #fff;
        /*width: 140px;*/
        border-radius: 20px;
    }
    .div-ticket-control {
        padding: 15px;
        background-color: #fff;
        margin-top: 30px;
    }
    .div-list-ticket {
        margin-top: 30px;
        padding: 15px;
        background-color: #fff;
    }
    .div-table-header {
        font-weight: bold;
        padding-bottom: 15px;
        border-bottom: 1px solid #d3d3d3;
    }
    table.table-list-ticket {
        width: 100%;
        margin-top: 15px;
    }

    table.table-list-ticket thead{
        font-weight:bold;
        text-align:left;
    }

        table.table-list-ticket thead td{
            padding:5px;
        }
        
        table.table-list-ticket tbody td {
            padding: 15px 5px;
            vertical-align: top;
        }
    button.btn.btn-confirm-delete {
        border-radius: 20px;
        right: 0px;
        width: 100px;
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        line-height: 20px;
        border-color: #37b5a3;
        background: #37b5a3;
        color: #fff;
        border-left: 1px solid #37b5a3 !important;
    }

    button.btn.btn-unconfirm-delete {
        border-radius: 20px;
        right: 0px;
        width: 100px;
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        line-height: 20px;
        border-color: #f8b13d;
        background: #f8b13d;
        color: #fff;
        border-left: 1px solid #f8b13d !important;
    }

    .btn-delete-ok {
        border-radius: 20px;
        right: 0px;
        width: 100px;
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        line-height: 20px;
        border-color: #f8b13d;
        background: #f8b13d;
        color: #fff;
        border-left: 1px solid #f8b13d !important;
    }

    .lb-opening {
        color: #37b5a3;
    }

    .lb-processing {
        color: #f8b13d;
    }
    i.fa.fa-times {
        color: #dd0000;
    }
    td.td-content{
        width:50%;
    }
</style>

<div class="text-center">
    <h2 class="h2-title">
        Support and Ticket
    </h2>
    <div class="ticket-explain">
        <p>
            We are always available and accessible to support you at anytime you need us. Here is our support email address link: <a href="mailto:support@ucoincash.co"> support@ucoincash.co</a>
        </p>
        <p>
            In case you need a technical support, it would be more convenient if you could create a ticket.
        </p>
    </div>
</div>
<div class="div-ticket-content">
    <div class="div-ticket-control">
        <a href="Home/new-ticket.html">
            <button class="btn btn-open-ticket"><i class="fa fa-plus"></i> New support ticket</button>
        </a>
    </div>
    <div class="div-list-ticket">
        <div class="table-responsive">
            <div class="div-table-header">
                <i class="fa fa-ticket"></i><span>List Ticket</span>
            </div>
            <table class="table-list-ticket">
                <thead>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Title
                        </td>
                        <td>
                            Category
                        </td>
                        <td>
                            Content
                        </td>
                        <td>
                            Created date
                        </td>
                        <td>
                            Status
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td colspan="7" class="text-center">
                                <div class="data-notify">You have no ticket!</div>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="/cdn-cgi/scripts/0e574bed/cloudflare-static/email-decode.min.js"></script><script>
    var ticketAction = {
        deleteTicket:'/Support/DeleteTicket'
    };
</script>
<script src="/Scripts/client/ticket.js"></script>
                </div>
            </div>
        </main>