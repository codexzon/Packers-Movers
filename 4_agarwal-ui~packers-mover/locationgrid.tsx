import React from "react";

const cities = [
  "Agarwal Movers In Ahmedabad",
  "Agarwal Movers In Ankleshwar",
  "Agarwal Movers In Allahabad",
  "Agarwal Movers In Ambala",
  "Agarwal Movers In Bangalore",
  "Agarwal Movers In Baramati",
  "Agarwal Movers In Bhubaneswar",
  "Agarwal Movers In Bikaner",
  "Agarwal Movers In India",
  "Agarwal Movers In Chandigarh",
  "Agarwal Movers In Coimbatore",
  "Agarwal Movers In Cochin",
  "Agarwal Movers In Delhi",
  "Agarwal Movers In Dehradun",
  "Agarwal Movers In Dwarka",
  "Agarwal Movers In Gandhidham",
  "Agarwal Movers In Gandhinagar",
  "Agarwal Movers In Gurugram",
  "Agarwal Movers In Ghaziabad",
  "Agarwal Movers In Guwahati",
  "Agarwal Movers In Greater Noida",
  "Agarwal Movers In Goa",
  "Agarwal Movers In Hisar",
  "Agarwal Movers In Hyderbad",
  "Agarwal Movers In Haridwar",
  "Agarwal Movers In Indore",
  "Agarwal Movers In Jamshedpur",
  "Agarwal Movers In Jaipur",
  "Agarwal Movers In Jodhpur",
  "Agarwal Movers In Jabalpur",
  "Agarwal Movers In Kolkata",
  "Agarwal Movers In Lonavala",
  "Agarwal Movers In Lucknow",
  "Agarwal Movers In Mumbai",
  "Agarwal Movers In Mangalore",
  "Agarwal Movers In Navi Mumbai",
  "Agarwal Movers In Nashik",
  "Agarwal Movers In Noida",
  "Agarwal Movers In Nagpur",
  "Agarwal Movers In Patna",
  "Agarwal Movers In Pune",
  "Agarwal Movers In Ranchi",
  "Agarwal Movers In Rajula",
  "Agarwal Movers In India",
  "Agarwal Movers In Vadodara",
];

export default function LocationsGrid() {
  return (
    <section className="py-10 px-4" style={{ backgroundColor: "#d60000" }}>
      <h2 className="text-2xl md:text-3xl font-bold text-center mb-8 text-white">
        AMP-Agarwal Movers Private Limited
      </h2>
      <div className="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 max-w-7xl mx-auto">
        {cities.map((city, index) => (
          <div
            key={index}
            className="text-xs sm:text-sm text-center font-semibold text-[#d60000] bg-white hover:bg-[#f1f1f1] px-3 py-2 rounded-md shadow-sm transition duration-200 cursor-pointer"
          >
            {city}
          </div>
        ))}
      </div>
    </section>
  );
}
