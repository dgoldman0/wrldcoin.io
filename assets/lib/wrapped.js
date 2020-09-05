var contractAddress = '';
const TID = 1002567;

$(document).ready(function() {
  function checkConnection() {
	  if (!window.tronWeb) {
	    $('#connection-status').html('Not Connected to Tron');
	    return false;
	  }
	  if (!window.tronWeb.defaultAddress.base58) {
	    $('#connection-status').html('Not Connected to Tron');
	    return false;
	  }
	    $('#connection-status').html('Connected to Tron');
	  return true;
	}
  // Use burner address to allow Tronweb to view basic information even when not logged in
	const burnerKey = 'c4e8f5a69efb674ba5ed4f0c53cfef0f90ff6134aba7417bfffcf3c7a2b13524'; // This is a burner account - it should not ever be used!
	var tronWebGlobal = new TronWeb({
	  fullHost: 'https://api.trongrid.io',
	  privateKey: burnerKey,
	});

	var contractGlobal = tronWebGlobal.contract(abi, contractAddress);

	// I should make the timer halt and wait until all checks are done, but we'll see.
	var run = function() {
    contractGlobal.totalSupply().call().then(function (res) {
			$('#wwld-supply').text(res);
		});
  };
});
