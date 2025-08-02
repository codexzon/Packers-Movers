export default function FreeQuoteBanner() {
  return (
    <section
      className="bg-cover bg-center text-white py-20 px-4 text-center"
      style={{
        backgroundImage: "url('/images/movers-background.jpeg')",
      }}
    >
      <div className="bg-black bg-opacity-60 p-6 rounded-xl max-w-3xl mx-auto">
        <h2 className="text-3xl md:text-4xl font-bold mb-4">
          Get your Free Moving Quote!
        </h2>
        <p className="text-lg md:text-xl mb-6">
          Get your free moving quote today and discover how affordable and seamless your relocation can be!
        </p>
        <a
          href="tel:9610016002"
          className="inline-block bg-red-800 hover:bg-red-900 text-white font-semibold px-8 py-3 rounded-md transition"
        >
          CONTACT US NOW
        </a>
      </div>
    </section>
  );
}