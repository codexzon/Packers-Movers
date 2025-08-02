import AgarwalHeader from "../../agarwal-header"
import AgarwalFooter from "../../agarwal-footer"

import QuoteFormSection from "../../quote-form-section"
import HeroQuoteSection from "../../hero-quote-section"

import ServiceSection from "../../services-section"
import LocationGrid from "../../locationgrid"
import FreeQuoteBanner from "../../freequotebanner"
import ReviewSection from "../../review-section"

export default function toplistedcities() {
  return (
    <div className="bg-gray-50 text-gray-800">

      <AgarwalHeader /> 
      <QuoteFormSection />
      <HeroQuoteSection />

{/* Top Cities Section Start */}
<section className="bg-red-600 py-8 px-4 md:px-10">
  <h2 className="text-center text-2xl md:text-3xl font-bold text-white mb-6">
    Top Cities in India
  </h2>
  <div className="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-sm md:text-base">
    {[
      "Mumbai", "Delhi", "Bangalore", "Hyderabad", "Chennai", "Kolkata", "Pune", "Ahmedabad",
      "Surat", "Jaipur", "Lucknow", "Kanpur", "Nagpur", "Indore", "Bhopal", "Chandigarh",
      "Patna", "Coimbatore", "Visakhapatnam", "Vadodara", "Ludhiana", "Varanasi", "Raipur",
      "Ranchi", "Guwahati"
    ].map((city) => (
      <a
        key={city}
        href="#"
        className="block bg-white text-red-600 font-medium text-center rounded-md py-2 px-4 hover:bg-red-100 transition"
      >
        {city}
      </a>
    ))}
  </div>
</section>

      <ServiceSection />
      <LocationGrid />
   
      <ReviewSection />
       <FreeQuoteBanner />
      <AgarwalFooter />
    </div>
  );
}