var contractAddress = 'TUNyaT9bPzhhLJpDnHxR36A4zo1Y3TbQF4';
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

	var contractGlobal = tronWebGlobal.contract(abi_wrapped, contractAddress);

  $('#wrap').click(function {
    var contract = window.tronWeb.contract(abi_forge, active.address);
    var amt = $('#amtWrap');
    if (Number(amt) != NaN)
      contract.wrap().send({shouldPollResponse: false, callValue: amt * 1000000});
  });

  $('#unwrap').click(function() {
    var contract = window.tronWeb.contract(abi_forge, active.address);
    var amt = $('#amtUnwrap');
    if (Number(amt) != NaN)
      contract.unwrap().send({shouldPollResponse: false, callValue: amt * 1000000});
  });

	// I should make the timer halt and wait until all checks are done, but we'll see.
	var run = function() {
    contractGlobal.totalSupply().call().then(function (res) {
			$('#wwrld-supply').text(res);
		});
  };
  run();
  setInterval(run, 1000);
});
