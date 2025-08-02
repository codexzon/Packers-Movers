import AgarwalHeader from "../../agarwal-header"
import AgarwalFooter from "../../agarwal-footer"

import QuoteFormSection from "../../quote-form-section"
import HeroQuoteSection from "../../hero-quote-section"

import ServiceSection from "../../services-section"
import LocationGrid from "../../locationgrid"
import FreeQuoteBanner from "../../freequotebanner"
import ReviewSection from "../../review-section"

export default function About() {
  return (
    <div className="bg-gray-50 text-gray-800">

      <AgarwalHeader /> 
      <QuoteFormSection />
      <HeroQuoteSection />

      <main className="container mx-auto px-4 py-16">
        {/* Page Title */}
        <section className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-extrabold mb-4 text-red-600">
            About Agarwal Packers and Movers
          </h1>
          <p className="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto">
            Trusted by thousands across India, we offer top-tier packing, moving, and relocation services tailored to your personal and business needs.
          </p>
        </section>

        {/* Mission & Vision */}
        <section className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
          <div className="bg-white rounded-xl shadow-md p-8">
            <h2 className="text-2xl font-semibold text-red-600 mb-4">Our Mission</h2>
            <p className="text-gray-600 leading-relaxed">
              At Agarwal Packers and Movers, our mission is to redefine the relocation experience through integrity, innovation, and commitment. We aim to deliver smooth, stress-free transitions backed by superior logistics and customer-first service.
            </p>
          </div>
          <div className="bg-white rounded-xl shadow-md p-8">
            <h2 className="text-2xl font-semibold text-red-600 mb-4">Our Vision</h2>
            <p className="text-gray-600 leading-relaxed">
              We envision becoming India's most trusted and technologically advanced relocation partner, connecting cities and hearts with reliability, safety, and speed.
            </p>
          </div>
        </section>

        {/* Why Choose Us */}
        <section className="bg-white rounded-xl shadow-md p-8 mb-16">
          <h2 className="text-3xl font-semibold text-center text-red-600 mb-6">Why Choose Us?</h2>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {[
              {
                title: "Experienced Professionals",
                icon: "👷",
                text: "Our trained staff handles every item with care and expertise, ensuring smooth packing, loading, and delivery.",
              },
              {
                title: "Pan-India Network",
                icon: "📍",
                text: "Our wide operational network covers all major cities and towns, making relocation fast and accessible.",
              },
              {
                title: "100% Safety Guarantee",
                icon: "🛡️",
                text: "We use secure packaging materials and tracked transport vehicles to keep your belongings safe at every stage.",
              },
              {
                title: "24/7 Customer Support",
                icon: "📞",
                text: "We're always available to answer your queries and provide real-time tracking for peace of mind.",
              },
            ].map((item, index) => (
              <div key={index} className="text-center">
                <div className="text-4xl mb-3">{item.icon}</div>
                <h3 className="text-xl font-bold mb-2">{item.title}</h3>
                <p className="text-gray-600 text-sm">{item.text}</p>
              </div>
            ))}
          </div>
        </section>

     
<section className="flex flex-col md:flex-row gap-8 mb-16 px-4 md:px-8">
  {/* Left: About Section (70%) */}
  <div className="md:w-[70%] w-full">
    <h2 className="text-3xl md:text-4xl font-extrabold text-red-900 mb-3 uppercase leading-tight">
      Welcome to AMP-AGARWAL MOVERS PVT. LTD.
    </h2>
    <h3 className="text-2xl font-semibold text-red-800 mb-5">
      Your Trusted Relocation Partner
    </h3>
    <div className="space-y-4 text-gray-800 text-[17px] leading-relaxed">
      <p>
        At <strong>AMP-Agarwal Movers Pvt. Ltd.</strong>, we understand that every move is a significant milestone. Our goal is to make it seamless, safe, and stress-free by offering expert logistics and relocation solutions tailored to your unique needs.
      </p>
      <p>
        With over <strong>129 offices</strong>, <strong>391+ branches</strong>, and <strong>1120+ franchises</strong> across India, we operate one of the largest and most reliable networks in the country, allowing us to reach every corner efficiently.
      </p>
      <p>
        With years of experience in the relocation industry, we offer comprehensive moving services that include packing, loading, transporting, and unpacking with unmatched professionalism.
      </p>
      <p>
        <strong>Nationwide and Global Reach:</strong> Our vast network of offices, franchisees, and logistics partners empowers us to execute local, national, and international moves with the same level of care and consistency.
      </p>
    </div>
  </div>

  {/* Right: Inquiry Form (30%) */}
  <div className="md:w-[30%] w-full bg-gradient-to-br from-yellow-300 to-yellow-400 p-6 rounded-2xl shadow-xl">
    <img
      src="/your-logo.png" // Replace with actual logo path
      alt="Agarwal Movers Logo"
      className="w-32 mx-auto mb-4"
    />
    <h3 className="text-2xl font-bold text-center text-red-900 mb-5">
      Get In Touch
    </h3>
    <form className="space-y-4">
      <input
        type="text"
        placeholder="Name"
        className="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
      />
      <div className="flex gap-3">
        <input
          type="email"
          placeholder="Email"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
        <input
          type="tel"
          placeholder="Phone"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
      </div>
      <div className="flex gap-3">
        <input
          type="text"
          placeholder="Shifting Date"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
        <input
          type="text"
          placeholder="Move Size"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
      </div>
      <div className="flex gap-3">
        <input
          type="text"
          placeholder="Move From"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
        <input
          type="text"
          placeholder="Move To"
          className="w-1/2 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
        />
      </div>
      <textarea
        placeholder="Message"
        rows={3}
        className="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-600"
      />
      <button
        type="submit"
        className="w-full bg-red-800 hover:bg-red-700 text-white py-3 rounded-lg font-semibold transition duration-300"
      >
        Submit
      </button>
    </form>
  </div>
</section>
{/* Certificates section start here */}
<section
  className="relative w-full h-auto bg-cover bg-center bg-no-repeat py-20 px-6 md:px-16"
  style={{
    backgroundImage: 'url(../../public/images/packers-background.jpeg)',
  }}
>
  <div className="absolute inset-0 bg-black bg-opacity-50"></div>

  <div className="relative z-10 text-center text-white max-w-7xl mx-auto">
    <h2 className="text-4xl font-bold mb-8">Our Certifications</h2>
    <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
      {[1, 2, 3].map((num) => (
        <div
          key={num}
          className="bg-white rounded-xl shadow-lg p-4 flex flex-col items-center justify-center text-black hover:shadow-2xl transition duration-300"
        >
          <img
            src={`/images/certificate-${num}.jpg`} // replace with your dummy images
            alt={`Certificate ${num}`}
            className="w-full h-48 object-contain mb-4"
          />
          <h3 className="font-semibold text-lg mb-2">Certificate Title {num}</h3>
          <p className="text-sm text-gray-600 mb-4 text-center">Issued by XYZ Authority</p>
          <div className="flex gap-4">
            <a
              href={`/certificates/certificate-${num}.pdf`} // Replace with actual file path
              download
              className="bg-red-700 text-white px-4 py-2 rounded hover:bg-red-600 text-sm"
            >
              Download
            </a>
            <button className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 text-sm">
              Share
            </button>
          </div>
        </div>
      ))}
    </div>
  </div>
</section>
{/* certificate option ended here */}
      <LocationGrid />
      <FreeQuoteBanner />

<section className="flex flex-col md:flex-row gap-8 items-start px-6 py-10 bg-white">
  {/* Left: Text Content */}
  <div className="md:w-2/3 w-full">

    <h3 className="text-blue-800 font-bold text-lg mb-2">
      About Us - AMP-AGARWAL MOVERS PVT. LTD.
    </h3>
    <p className="text-gray-800 mb-4">
      Welcome to <strong>AMP-AGARWAL MOVERS PVT. LTD.</strong> — a name synonymous with trust,
      excellence, and innovation in the logistics and relocation industry. With a deep-rooted
      commitment to providing seamless moving solutions, we have established ourselves as
      India’s largest and fastest-growing logistics network. Our unparalleled reach and dedication
      to customer satisfaction make us the preferred choice for millions.
    </p>

    <h4 className="text-lg font-semibold text-gray-900 mb-1">Our Logistic Network</h4>
    <p className="text-gray-800 mb-4">
      AMP-AGARWAL MOVERS PVT. LTD. boasts one of the most robust and extensive logistics networks
      in India. With over 129 offices, 391 branches, and 1120+ franchises and vendor partnerships,
      we ensure our services are accessible nationwide. As the largest network of its kind in the
      country, we are equipped to meet diverse moving needs with speed, precision, and reliability.
    </p>

    <h4 className="text-lg font-semibold text-gray-900 mb-1">Our Core Strengths</h4>
    <p className="text-gray-800 mb-6">
      <span className="text-blue-700 font-semibold">Agarwal Movers & Packers</span> is committed
      to delivering services that meet the highest standards of safety, reliability, and efficiency.
    </p>

    {/* Contact Info Section */}
    <div className="bg-gray-100 p-6 rounded-lg shadow-sm">
      <h3 className="text-xl font-semibold text-gray-900 mb-4">Contact Information</h3>
      <p className="text-gray-800 mb-2">
        <strong>Address:</strong><br />
        Plot No E, SHRAVAN Housing Society Ltd,<br />
        Shop No. 21, Ground Floor, 37 to E-40, Near Dmart Road, Mall,<br />
        Sector 9, Airoli, Navi Mumbai, Maharashtra 400708
      </p>
      <p className="text-gray-800 mb-2">
        <strong>Phone:</strong><br />
        <a href="tel:+919491900300" className="text-blue-700 hover:underline">+91-9491900300</a>,&nbsp;
        <a href="tel:+919610016002" className="text-blue-700 hover:underline">+91-9610016002</a>
      </p>
      <p className="text-gray-800">
        <strong>Email:</strong><br />
        <a href="mailto:info@agarwalpackersmovers.in" className="text-blue-700 hover:underline">
          info@agarwalpackersmovers.in
        </a>
      </p>
    </div>
  </div>

  <ReviewSection />

  {/* Right: Image */}
  <div className="md:w-1/3 w-full">
    <img
      src="/images/movers-background.jpeg"
      alt="AMP Agarwal Movers Banner"
      className="w-full rounded-lg shadow-lg object-cover"
    />
  </div>
</section>
        {/* Optional About Section Component */}
        <div className="mb-16">
        </div>
      </main>

      <AgarwalFooter />
    </div>
  );
}