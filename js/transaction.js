const saleButton = document.getElementById('buyButton')
saleButton.addEventListener("click", () => {
  console.log("buy");
  getContentItems();
});

async function getContentItems(){
  const itemContractAddress = "0xF4603b34D0D4F4a36483aB3b4a853347c4f9a3aa";
  const marketContractAddress = "0xe001864cE20ec86961F1b2a6FD82655CF2525d85";

  const provider = new ethers.providers.Web3Provider(window.ethereum, "any");
  const signer = provider.getSigner();
  const marketAbi = [
    // Get the account balance
    "function createMarketSale(address nftContract, uint256 itemId) public payable nonReentrant",
  ];

  const MarketContract = new ethers.Contract(marketContractAddress, marketAbi, signer);

  const ok = await MarketContract.createMarketSale(itemContractAddress,5 );
  console.log(ok);
    // const test1 = 'result';
    // const test2 = 'result';
    // const test3 = '5';
    // const test4 = '20';
    // var formData = new FormData();
    // // var username = document.getElementById('username').value;
    // formData.append('seller', test1);
    // formData.append('buyer', test2);
    // formData.append('idproduct', test3);
    // formData.append('price', test4);
    // // formData.append('wallet', userAddress);
    
    //   $.ajax({
    //       url: 'transaction.php',
    //       type: 'POST',
    //       data: formData,
    //       async: false,
    //       success: function(data) {
    //         alert(data)
    //         window.location.href='detail.php?id=38'
    //       },
    //       cache: false,
    //       contentType: false,
    //       processData: false
    //     });
}