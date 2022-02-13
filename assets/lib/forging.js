var addresses = [];
var names = [];
var links = [];

addresses.CMD = '';
names.CMD = 'CMD Token';

links.CMD = 'https://wrldcoin.io';

var active = [];
active.token = names.CMD;
active.address = addresses.CMD;

var forgeContract;

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
		console.log("Checking for web3");
		// Checking if Web3 has been injected by the browser (Mist/MetaMask)
		if (typeof window.web3 !== 'undefined') {
			// Use Mist/MetaMask's provider
			abi = JSON.parse(abi_forge);

			forgeContract = window.web3.eth.contract(abi);
			return true;
		} else {
			console.log("Warning: no Web3 object- try the MetaMask browser extension.")
			return false;
			// fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
			// window.web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
		}
	}
	$("#forge").click(function() {
		if (checkConnection()) {
			var contract = forgeContract.at(active.address);
			// Get total WRLD to spend and make sure it's not too much. Then send forge request: don't forget to add the deciminals 10^6
			var amt = $("#amtWRLD").val();
			if (Number(amt) != NaN) {
				amt = (amt * 1000000000000000000).toFixed(0);
				contract.forge(0, amt).send({shouldPollResponse: false});
			}
		}
	});
	// Get the correct registartion fee and send it to register for smithing.
	$("#register").click(function() {
		if (checkConnection()) {
			var contract = forgeContract.at(active.address);
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
			var contract = forgeContract.at(active.address);
			contract.totalSupply().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#total-supply").text(Math.round(res / 1000000));
				}
			});
			// I can't seem to figure out which order is res and error!! Something's weird.
			contract.balanceOf(web3.eth.accounts[0]).call(function (err, res) {
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
					contract.timeToForge(web3.eth.accounts[0]).call().then(function (res) {
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
