

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1)
            height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
function checkbox(x) {
    return '<center><input class="checkbox multi-select" type="checkbox" name="val[]" value="' + x + '" /></center>';
}
$(document).ready(function () {
    $(".select_all").change(function () {
        $(".multi-select,.select_all").prop('checked', $(this).prop("checked"));
    });
});
$(document).ready(function () {
    $(".multi-select").change(function () {
        $(".select_all").prop('checked', $(this).prop("checked"));
    });
});
$.extend(true, $.fn.dataTable.defaults, {sDom: "<'row'<'col-md-6 text-left'l><'col-md-6 text-right'f>r>t<'row'<'col-md-6 text-left'i><'col-md-6 text-right'p>>", sPaginationType: "bootstrap", "fnDrawCallback": function () {
        $(".tip").tooltip({html: true});
        $(".popnote").popover();
//        $('.checkbox').iCheck({checkboxClass: 'icheckbox_square-blue', radioClass: 'iradio_square-blue', increaseArea: '20%'});
        $("input").addClass('input-xs');
        $("select").addClass('select input-xs');
    }});

$.fn.dataTableExt.oApi.fnPagingInfo = function (a) {
    return{iStart: a._iDisplayStart, iEnd: a.fnDisplayEnd(), iLength: a._iDisplayLength, iTotal: a.fnRecordsTotal(), iFilteredTotal: a.fnRecordsDisplay(), iPage: a._iDisplayLength === -1 ? 0 : Math.ceil(a._iDisplayStart / a._iDisplayLength), iTotalPages: a._iDisplayLength === -1 ? 0 : Math.ceil(a.fnRecordsDisplay() / a._iDisplayLength)}
};
$.extend($.fn.dataTableExt.oPagination, {bootstrap: {fnInit: function (e, b, d) {
            var a = e.oLanguage.oPaginate;
            var f = function (g) {
                g.preventDefault();
                if (e.oApi._fnPageChange(e, g.data.action)) {
                    d(e)
                }
            };
            $(b).append('<ul class="pagination "><li class="paginate_button page-item prev disabled"><a class="page-link" href="#"> ' + a.sPrevious + '</a></li><li class="paginate_button page-item next disabled"><a class="page-link" href="#">' + a.sNext + " </a></li></ul>");
            var c = $("a", b);
            $(c[0]).bind("click.DT", {action: "previous"}, f);
            $(c[1]).bind("click.DT", {action: "next"}, f)
        }, fnUpdate: function (c, k) {
            var l = 5;
            var e = c.oInstance.fnPagingInfo();
            var h = c.aanFeatures.p;
            var g, m, f, d, a, n, b = Math.floor(l / 2);
            if (e.iTotalPages < l) {
                a = 1;
                n = e.iTotalPages
            } else {
                if (e.iPage <= b) {
                    a = 1;
                    n = l
                } else {
                    if (e.iPage >= (e.iTotalPages - b)) {
                        a = e.iTotalPages - l + 1;
                        n = e.iTotalPages
                    } else {
                        a = e.iPage - b + 1;
                        n = a + l - 1
                    }
                }
            }
            for (g = 0, m = h.length; g < m; g++) {
                $("li:gt(0)", h[g]).filter(":not(:last)").remove();
                for (f = a; f <= n; f++) {
                    d = (f == e.iPage + 1) ? 'class="paginate_button page-item active"' : "";
                    $("<li " + d + '><a class="page-link" href="#">' + f + "</a></li>").insertBefore($("li:last", h[g])[0]).bind("click", function (i) {
                        i.preventDefault();
                        c._iDisplayStart = (parseInt($("a", this).text(), 10) - 1) * e.iLength;
                        k(c)
                    })
                }
                if (e.iPage === 0) {
                    $("li:first", h[g]).addClass("disabled")
                } else {
                    $("li:first", h[g]).removeClass("disabled")
                }
                if (e.iPage === e.iTotalPages - 1 || e.iTotalPages === 0) {
                    $("li:last", h[g]).addClass("disabled")
                } else {
                    $("li:last", h[g]).removeClass("disabled")
                }
            }
        }}});
if ($.fn.DataTable.TableTools) {
    $.extend(true, $.fn.DataTable.TableTools.classes, {container: "btn-group", buttons: {normal: "btn btn-sm btn-primary", disabled: "disabled"}, collection: {container: "DTTT_dropdown dropdown-menu", buttons: {normal: "", disabled: "disabled"}}, print: {info: "DTTT_print_info modal"}, select: {row: "active"}});
    $.extend(true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {collection: {container: "ul", button: "li", liner: "a"}})

}
;
jQuery.fn.dataTableExt.oApi.fnSetFilteringDelay = function (oSettings, iDelay) {
    var _that = this;
    if (iDelay === undefined) {
        iDelay = 500;
    }
    this.each(function (i) {
        $.fn.dataTableExt.iApiIndex = i;
        var
                $this = this,
                oTimerId = null,
                sPreviousSearch = null,
                anControl = $('input', _that.fnSettings().aanFeatures.f);
        anControl.unbind('keyup search input').bind('keyup search input', function () {
            var $$this = $this;
            if (sPreviousSearch === null || sPreviousSearch != anControl.val()) {
                window.clearTimeout(oTimerId);
                sPreviousSearch = anControl.val();
                oTimerId = window.setTimeout(function () {
                    $.fn.dataTableExt.iApiIndex = i;
                    _that.fnFilter(anControl.val());
                }, iDelay);
            }
        });
        return this;
    });
    return this;

};

changeStatus = function (k, i, t) {
    chStatus = {key: k, id: i, tab: t};
    $.ajax({
        url: site_url + "admin/"+t+"/set_status",
        data: $.param(chStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.draw();
            } else {
                alert("error");
            }
        }
    });
    return false;
}
changeVStatus = function (k, i, t) {
    chStatus = {key: k, id: i, tab: t};
    $.ajax({
        url: site_url + "admin/Admin_controller/setVStatus",
        data: $.param(chStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.draw();
            } else {
                alert("error");
            }
        }
    });
    return false;
}
changeOpenStatus = function (k, i, t) {
    chStatus = {key: k, id: i, tab: t};
    $.ajax({
        url: site_url + "admin/Admin_controller/setOpenStatus",
        data: $.param(chStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.draw();
            } else {
                alert("error");
            }
        }
    });
    return false;
};
setOrderStatus = function (i) {
    var name = $("#status_name option:selected").val();
    ;
//    var name = $('select[name=status_name]').val();
    chorStatus = {id: i, status_name: name};
    $.ajax({
        url: site_url + "admin/Setting_controller/change_status",
        data: $.param(chorStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.draw();
            } else {
                alert("error");
            }
        }
    });
    return false;
};
changeUStatus = function (k, i, t) {

    chStatus = {key: k, id: i, tab: t};
    $.ajax({
        url: site_url + "admin/Admin_controller/setUStatus",
        data: $.param(chStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.fnDraw();
            } else {
                alert("error");
            }
        }
    });
    return false;
}
bulkDelete = function (t) {
    var queryString = $('#xform').serialize();
    if ($('.multi-select').is(":checked")) {
        if (confirm("Are you sure for Bulk delete")) {
            $.ajax({
                url: site_url + "admin/"+t+"/bulk_delete",
                data: queryString,
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        oTable.draw();
                    } else {
                        alert("error");
                    }
                }
            });
        }
    } else {
        alert("Please Check at least one checkbox!!");
    }
    return false;
}
changeOrder = function (k, i, t, o) {
//    alert();
    x = $(o).val();
    chStatus = {key: k, id: i, tab: t, order: x};
    $.ajax({
        url: site_url + "admin/Admin_controller/setOrder",
        data: $.param(chStatus),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                oTable.fnDraw();
            } else {
                alert("error");
            }
        }
    });
    return false;
}
exceldownload = function () {
    var queryString = $('#xform').serialize();
    if ($('.multi-select').is(":checked")) {
        window.location = site_url + "admin/Admin/exceldownload?" + queryString;
    } else {
        alert("Please Check at least one checkbox!!");
    }
    return false;
}
function setImg(x) {
    return "<center><img src='" + site_url + "assets/images/banners/" + x + "' class='img-responsive' style='height:100px;width:150px;' alt='No image'/></center>";
}
function setStatus(x) {
    if (x == 'Active') {
        return "<label class='badge badge-success' title='Click to Deactivate' style='cursor: pointer'>" + x + "</label>";
    } else {
        return "<label class='badge badge-danger' title='Click to Activate' style='cursor: pointer'>" + x + "</label>";
    }
}
function setOrder(x) {
    return "<input type='number' value='" + x + "' class='col-md-8 orderx' min='1'/>";
}
function setAttachment(x) {
    var d = JSON.parse(x);
    return "<a href='" + site_url + "Download/?path=" + encodeURI(d.full_path) + "'><label class='label label-info'>" + d.file_name + " <i class='fa fa-download' style='color:#fff'></i></label></a>";
}
function setWStatus(x) {
    if (x == 'Pending') {
        return "<label class='label label-success' title='Click to Deactivate' style='cursor: pointer'>" + x + "</label>";
    }
    else if (x == 'Approve') {
        return "<label class='label label-primary' title='Click to Activate' style='cursor: pointer'>" + x + "</label>";
    }
    else if (x == 'Disapprove') {
        return "<label class='label label-danger' title='Click to Activate' style='cursor: pointer'>" + x + "</label>";
    }
}
function setBettStatus(x) {
    if (x == 'Cancelled') {
        return "<label class='label label-primary'  style='cursor: pointer'>" + x + "</label>";
    } else if (x == 'Result') {
        return "<label class='label label-success' style='cursor: pointer'>" + x + "</label>";
    } else if (x == 'Closed') {
        return "<label class='label label-danger'  style='cursor: pointer'>" + x + "</label>";
    } else if (x == 'Open') {
        return "<label class='label label-info'  style='cursor: pointer; background-color:#31B0D5 !important'>" + x + "</label>";
    } else if (x == 'Pending') {
        return "<label class='label label-warning'  style='cursor: pointer;'>" + x + "</label>";
    }
}
function setVStatus(x) {
    if (x == 'Active') {
        return "<label class='label label-success' title='Click to Deactivate' style='cursor: pointer'>" + x + "</label>";
    } else {
        return "<label class='label label-danger' title='Click to Activate' style='cursor: pointer'>" + x + "</label>";
    }
}
function setOpenStatus(x) {
    if (x != 'Close') {
        return "<label class='label label-success' title='Click to Close' style='cursor: pointer'>We are Open</label>";
    } else {
        return "<label class='label label-danger' title='Click to Open' style='cursor: pointer'>We are Close</label>";
    }
}
function setUStatus(x) {
    if (x == 1) {
        return "<label class='label label-success' title='Click to Deactivate' style='cursor: pointer'>Active</label>";
    } else {
        return "<label class='label label-danger' title='Click to Activate' style='cursor: pointer'>Deactive</label>";
    }
}
function change_status(x, type, row) {
//    alert(row);
    //<select name="status_name" id="status_name"><option value="">Select Type</option><option value="ordered" selected>Ordered</option><option value="checked" selected>Checked</option><option value="pending" selected>Pending</option><option value="failed" selected>Failed</option><option value="processed" selected>Processed</option><option value="refunded" selected>Refunded</option><option value="rejected" selected>Rejected</option><option value="canceled" selected>Canceled</option></select>
    var res = '<select name="status_name" id="status_name" >';
    res += '<option value="">Select Type</option>';
    if (x == 'ordered')
        res += '<option value="ordered" selected>Ordered</option>';
    else
        res += '<option value="ordered">Ordered</option>';
    if (x == 'checked')
        res += '<option value="checked" selected>Checked</option>';
    else
        res += '<option value="checked">Checked</option>';
    if (x == 'pending')
        res += '<option value="pending" selected>Pending</option>';
    else
        res += '<option value="pending">Pending</option>';
    if (x == 'failed')
        res += '<option value="failed" selected>Failed</option>';
    else
        res += '<option value="failed">Failed</option>';
    if (x == 'processed')
        res += '<option value="processed" selected>Processed</option>';
    else
        res += '<option value="processed">Processed</option>';
    if (x == 'refunded')
        res += '<option value="refunded" selected>Refunded</option>';
    else
        res += '<option value="refunded">Refunded</option>';
    if (x == 'rejected')
        res += '<option value="rejected" selected>Rejected</option>';
    else
        res += '<option value="rejected">Rejected</option>';
    if (x == 'completed')
//        res += '<option value="completed" selected>Completed</option>';
        res = "<label class='label label-success' title='Click to Close' style='cursor: pointer'>Completed</label>";
    else
        res += '<option value="completed">Completed</option>';
    if (x == 'canceled')
        res += '<option value="canceled" selected>Canceled</option></select>';
    else if (x != 'completed')
        res += '<option value="canceled">Canceled</option></select>';
    return res;
//    if (x == 1) {
//        return "<label class='label label-success' title='Click to Deactivate' style='cursor: pointer'>Active</label>";
//    } else {
//        return "<label class='label label-danger' title='Click to Activate' style='cursor: pointer'>Deactive</label>";
//    }
}

function getCat(x, type, row) {
    if (x == '' && x == null) {
        return  row[2];
    } else {
        return x;
    }
}
/**
 * Comment
 */
function SetImage(x) {

    return "<img src='" + site_url + "assets/admin/images/product/" + x + "' class='img-responsive'/>";

}
function setProdImg(i,t){
    img_pram = {id: i,tab: t};
    $.ajax({
        url: site_url + "admin/"+t+"/get_th_img",
        data: $.param(img_pram),
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.status == 1) {
                alert(data.img);
               return "<img src='"+data.img+"' style='width:100px;height:100px;' class='img-responsive'/>"
            } else {
                alert("error");
            }
        }
    });
}
function SetImagejson(x) {

    var arr = [];
    arr = JSON.parse(x);

//        if(arr != null && arr !=''){
//            var img = arr[0]['url'];
//            //alert(img);
//            return "<img src='"+img + "' class='img-responsive'/>";
//        }else{
//            return "<img src='' class='img-responsive'/>";
//        }

}

function setLogo(x) {
    if (x == null) {
        return"<img src='" + site_url + "assets/admin/images/user.png ' class='img-responsive img-circle' height='50' width='50'/>";
    } else {
        return"<img src='" + site_url + "assets/admin/images/Supplierlogo/" + x + "' class='img-responsive img-circle' height='50' width='50'/>";
    }
}
function setShipLogo(x) {
    if (x == "") {
        return"<img src='" + site_url + "assets/admin/images/user.png ' class='img-responsive img-circle' height='50' width='50'/>";
    } else {
        return"<img src='" + site_url + "assets/admin/images/shipperlogo/" + x + "' class='img-responsive img-circle' height='50' width='50'/>";
    }

}
function formatMoney(x, symbol) {
    if (!symbol) {
        symbol = "";
    }
    return symbol + ' ' + format(parseFloat(x).toFixed(2));

}
function formatNumber(x, d) {
    if (!d && d != 0) {
        d = 2;
    }
    return format(parseFloat(x).toFixed(d));
}
function format(x) {
    x = x.toString();
    var afterPoint = '';
    if (x.indexOf('.') > 0)
        afterPoint = x.substring(x.indexOf('.'), x.length);
    x = Math.floor(x);
    x = x.toString();
    var lastThree = x.substring(x.length - 3);
    var otherNumbers = x.substring(0, x.length - 3);
    if (otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;

    return res;
}
function currancyformat(x) {
    return formatMoney(x, "&#8377");

}
function qtyFormat(x) {
    return formatNumber(x, 2);

}
function strCutter(s) {
    return s.substring(0, 150) + '...';
}
//function setIcon(x) {
//    return"<span><i class='" + x + "' aria-hidden='"+true+"/></span>";
//}