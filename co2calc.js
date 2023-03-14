const byId = id => document.getElementById(id);
Calculate();
function Calculate()
{
	const e = byId("powerUnit");
	const power = byId("power").value / e.options[e.selectedIndex].value;
	
	const totalPercentage = Number(byId("coal%").value) + Number(byId("gas%").value) + Number(byId("oil%").value) + Number(byId("hydro%").value) + Number(byId("renew%").value) + Number(byId("nuclear%").value) + Number(byId("custom%").value);
	byId("total%").textContent = Math.round(totalPercentage*10)/10 + "%";
	
	const kgCO2result = ((byId("coal%").value * byId("coalCO").value + byId("gas%").value * byId("gasCO").value + byId("oil%").value * byId("oilCO").value +
				  byId("hydro%").value * byId("hydroCO").value + byId("renew%").value * byId("renewCO").value + byId("nuclear%").value * byId("nuclearCO").value + 
				  byId("custom%").value * byId("customCO").value) / 100000) * 24 * 365.2422 * power; //Yes, I am accounting for the leap year. Yes, I am a nerd.
	const treesRequired = kgCO2result / 15.7;

	byId("kgCO2result").textContent = ((Math.ceil(kgCO2result)).toLocaleString('en')).replace(/,/g," ");
	byId("treesRequired").textContent = ((Math.ceil(treesRequired)).toLocaleString('en')).replace(/,/g," ");
	byId("priceRequired").textContent = ((Math.round(treesRequired / 10)).toLocaleString('en')).replace(/,/g," ");
}

