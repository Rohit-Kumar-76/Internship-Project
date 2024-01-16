
//finction For the calculating Data
function cal()
{


    var salamount = parseInt(document.emform.sal.value);
    var taamount = parseInt(document.emform.TAP.value);
    var daamount = parseInt(document.emform.DAP.value);
    var hraamount = parseInt(document.emform.HRAP.value);
    var taxamount = parseInt(document.emform.tax1.value);
    TAAM =salamount*taamount/100;
    DAAM =salamount*daamount/100;
    HRAM =salamount*hraamount/100;
    TAXAM =salamount*taxamount/100;
    gam=DAAM+HRAM+TAAM;;

    document.emform.DA.value=DAAM; 
    document.emform.HRA.value=HRAM; 
    document.emform.TA.value=TAAM; 
    document.emform.GS.value= gam;
    document.emform.tax.value=TAXAM;
    document.emform.NS.value=salamount-(gam+TAXAM);
}

function act()
{
    window.close();
    window.open("home.htm");
}