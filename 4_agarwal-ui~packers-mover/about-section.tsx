export default function AboutSection() {
  return (
    <section className="bg-white py-16 px-4">
      <div className="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
        
        {/* Left Side: Image */}
        <div className="w-full md:w-1/2">
          <img
            src="/images/movers-background.jpeg"
            alt="About AMP Agarwal Movers"
            className="rounded-2xl shadow-md w-full object-cover h-[400px]"
          />
        </div>

        {/* Right Side: Text */}
        <div className="w-full md:w-1/2">
          <h2 className="text-3xl md:text-4xl font-bold text-red-700 mb-4">
            About AMP-AGARWAL MOVERS PRIVATE LIMITED
          </h2>
          <p className="text-gray-700 text-lg mb-6 leading-relaxed">
            At AMP-Agarwal Movers Private Limited, we specialize in providing reliable, efficient,
            and affordable relocation services across India. With a customer-first approach and
            years of experience, we’ve built a strong reputation for safe and timely delivery.
          </p>
          <p className="text-gray-600 text-base leading-relaxed">
            Whether you need household shifting, vehicle transportation, warehousing, or international
            relocation, our skilled professionals ensure a stress-free experience. We handle every move
            with care, transparency, and precision, backed by modern logistics and insurance support.
          </p>
          <button className="mt-6 bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-md font-semibold text-sm">
            Learn More
          </button>
        </div>
      </div>
    </section>
  );
}