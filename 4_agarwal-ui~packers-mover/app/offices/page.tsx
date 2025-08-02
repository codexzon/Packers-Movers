import AgarwalHeader from "../../agarwal-header"
import AgarwalFooter from "../../agarwal-footer"

import QuoteFormSection from "../../quote-form-section"
import HeroQuoteSection from "../../hero-quote-section"

import ServiceSection from "../../services-section"
import LocationGrid from "../../locationgrid"
import FreeQuoteBanner from "../../freequotebanner"
import ReviewSection from "../../review-section"

export default function Offices() {
  return (
    <div className="bg-gray-50 text-gray-800">

      <AgarwalHeader /> 
      <QuoteFormSection />
      <HeroQuoteSection />

{/* office section start from here  */}
<section className="bg-red-600 py-8 px-4 md:px-10">
  <h2 className="text-center text-2xl md:text-3xl font-bold text-white mb-6">
    Agarwal Movers and Packers Offices In INDIA
  </h2>
  <div className="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-sm md:text-base">
    {[
      "Agra", "Ambala", "Allahabad", "Aurangabad", "Ahmedabad", "Ankleshwar", "Banaras", "Bhopal", "Baroda", "Bangalore",
      "Bhubaneswar", "Bhuj", "Chandigarh", "Cuttack", "Coimbatore", "Calicut", "Cochin", "Chennai", "Dehradun", "Delhi",
      "Goa", "Gurgaon", "Gwalior", "Gandhidham", "Ghaziabad", "Guwahati", "Haridwar", "Hisar", "Thane", "Hyderabad",
      "Haryana", "Indore", "Jabalpur", "Jamshedpur", "Jodhpur", "Jaipur", "Jammu Kashmir", "Kanpur", "Kolkata", "Kalighat",
      "Kolhapur", "Kottayam", "Ludhiana", "Lucknow", "Meerut", "Madurai", "Mumbai", "Mysore", "Mangalore", "Nagpur",
      "Navi Mumbai", "Nashik", "Noida", "Patna", "Patalganga", "Pondichery", "Port Blair", "Pune", "Raipur", "Ranchi",
      "Rajkot", "Rourkela", "Rudrapur", "Raigarh", "Siliguri", "Surat", "Tinsukia", "Tirupur", "Trivandrum", "Trichy",
      "Udaipur", "Varanasi", "Vapi", "Vijaywada", "Vishakhapatnam", "Greater Noida", "Bikaner", "Pilani",
      "New Delhi", "Gurgaon Sector 4", "Dlf Phase 1", "Faridabad"
    ].map((city) => (
      <a
        key={city}
        href="sub_offices/agra-office.tsx"
        className="block bg-white text-red-600 font-medium text-center rounded-md py-2 px-4 hover:bg-red-100 transition"
      >
        {city}
      </a>
    ))}
  </div>
</section>

{/* office section ended here / */}

      <ReviewSection />
      <AgarwalFooter />
    </div>
  );
}