var addresses = [];
var names = [];
var links = [];

// Old PHC TBWKyAYGvkMwiKaGbZoRXuhJQXQqn2zzrX
//addresses.ACW = 'TE6c9Qi4HGHf6j7kcs3AK1snbgQ4bEMEtv';
//names.ACW = 'Academic Reward';

addresses.PHC = 'TVxEqHRA9woSA2RvkJJEfmYJJG6NXvbFiV';
addresses.ACW = 'TNhTdHvG8bLkG2g1RCBvrSyTS6yYTsoLn8';
addresses.ARC = 'TWi6mwMMc9PmhXPjFSvedxHHZqi6FWnaqS';
names.PHC = 'Public Health Coin';
names.ACW = 'Academic Reward Token';
names.ARC = 'Arcadium Token';

links.PHC = 'https://promote.health/public-health-coin/';
links.ACW = 'https://celebrating.science';
links.ARC = 'http://arcadium.fun/';
const TID = 1002567;

var active = [];
active.token = 'PHC';
active.address = 'TVxEqHRA9woSA2RvkJJEfmYJJG6NXvbFiV';

$(document).ready(function() {
	// Add Options to Select
	var sel = document.getElementById('token');
	let tokens = Object.keys(names);
	for (let i in tokens) {
		let token = tokens[i]; // Not sure why for x in keys doesn't give keys rather than index!
		let opt = document.createElement('option');
		opt.value = token;
		opt.innerText = names[token];
		sel.appendChild(opt);
	}
	$('#token').change(function() {
		let token = $(this).val();
		// A lot of this stuff could be replaced if I could remember how to use AngularJS. Data binding would make token changing a lot easier.
		$('#addr').html('<a href = "https://tronscan.org/#/token20/' + addresses[token] + '">' + addresses[token] + '</a>');
		$('#cur').text(token);
		$('#cur2').text(token);
		$('#cur3').text(token);
		$('#project_link').attr('href', links[token]);
		active.token = token;
		active.address = addresses[token];
	});
	function checkConnection() {
	  if (!window.tronWeb) {
	    return false;
	  }
	  if (!window.tronWeb.defaultAddress.base58) {
	    return false;
	  }
	  return true;
	}
	$("#forge").click(function() {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_forge, active.address);
			// Get total WRLD to spend and make sure it's not too much. Then send forge request: don't forget to add the deciminals 10^6
			var amt = $("#amtWRLD").val();
			if (Number(amt) != NaN) {
				amt = (amt * 1000000).toFixed(0);
				contract.forge().send({shouldPollResponse: false, tokenValue: amt, tokenId: TID});
			}
		}
	});
	// Get the correct registartion fee and send it to register for smithing.
	$("#register").click(function() {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_forge, active.address);
			contract.smithFee().call().then(function (res) {
				if (Number(res) != NaN) {
					contract.paySmithingFee().send({shouldPollResponse: false, callValue: res});
				}
			});
		}
	});
	// Primary function that updates information regularly
	var run = function() {
		// Check global information that's player independent
		if (checkConnection()) {
			$("#disconnected_message").hide();
			var contract = window.tronWeb.contract(abi_forge, active.address);
			contract.totalSupply().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#total-supply").text(Math.round(res / 1000000));
				}
			});
			// I can't seem to figure out which order is res and error!! Something's weird.
			contract.balanceOf(tronWeb.defaultAddress.base58).call(function (err, res) {
				$('#balance').text(res.balance / 1000000);
			});
			contract.totalWRLD().call().then(function (res, err) {
				if (Number(res) != NaN) {
					$("#total-wrld").text(res / 1000000);
				}
			});
			contract.smithCount().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#smith-count").text(res);
				}
			});
			contract.canSmith().call().then(function (res) {
				if (res) {
					contract.timeToForge(tronWeb.defaultAddress.base58).call().then(function (res) {
						let val = Number(res)
						$("#forge").prop('disabled', val != 0);
						if (val != NaN && val != 0) {
							$("#forge").text("Forge In " + val + " Seconds");
						} else {
							$("#forge").text("Forge Tokens");
						}
					});
					$("#register_form").hide();
					$("#forge_form").show();

					contract.forgePrice().call().then(function (res) {
						if (Number(res) != NaN) {
							$("#est").text($("#amtWRLD").val() / res);
							$('#price').text(res);
						}
					});
					contract.maxForge().call().then(function (res) {
						if (Number(res) != NaN) {
							$("#max").text(res / 1000000);
						}
					});
				} else {
					$("#register_form").show();
					$("#forge_form").hide();
					contract.smithFee().call().then(function (res) {
						if (Number(res) != NaN) $("#registration_fee").text(res / 1000000);
					});
				}
			});
		} else {
			$("#register_form").hide();
			$("#forge_form").hide();
			$("#disconnected_message").show();
		}
	};
	run();
	setInterval(run, 1000);
});
